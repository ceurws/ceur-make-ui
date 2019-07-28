<?php
	include_once '_inc/common.php';

	$page_title = 'Password Reset';
	
	//-- if already logged in, redirect to the home page
	if( is_logged_in() )
	{
		redirect( 'index.php' );
	}
	
	$email 	= isset( $_GET['email'] ) ? trim( $_GET['email'] ) : '';	
	$code 	= isset( $_GET['code'] ) ? trim( $_GET['code'] ) : '';	
	
	//-- check if the email and verification code is present
	if( empty( $email ) OR empty( $code ) )
	{
		$error_msg = "Please initiate request again";
		
		//-- redirect to login page
		redirect( 'login.php?error=' . urlencode( $error_msg ) );
	}	
	
	//-- when form is submitted by user..
	if( isset( $_POST['submit'] ) )
	{
		//-- read the input
		$new_pwd 		= isset( $_POST['new_pwd'] ) ? trim( $_POST['new_pwd'] ) : '';	
		$confirm_pwd 	= isset( $_POST['confirm_pwd'] ) ? trim( $_POST['confirm_pwd'] ) : '';	
	
		//-- for security
		$security_token = isset( $_POST['security_token'] ) ? trim( $_POST['security_token'] ) : '';
		if( $security_token != $_SESSION['security_token'] )
		{	
			$error_msg = "Security token mismatch! Please try again.";
			
			//-- redirect 
			redirect( 'forgot_pwd.php?error=' . urlencode( $error_msg ) );		
		}
		
		//-- remove the security token from session
		if( isset( $_SESSION['security_token'] ) )
		{
			unset( $_SESSION['security_token'] );	
		}
		
		//-- basic validation
		if( empty( $new_pwd ) OR empty( $confirm_pwd ) )
		{
			$error_msg = "All fields are mandatory!";
			
			//-- redirect 
			redirect( 'password_reset.php?email='. urlencode( $email ) .'&code='. $code .'&error=' . urlencode( $error_msg ) );			
		}
		
		//-- check if both the new password and the confirm password are same
		if( $new_pwd != $confirm_pwd )
		{
			$error_msg = "Password mismatch!";
			
			//-- redirect 
			redirect( 'password_reset.php?email='. urlencode( $email ) .'&code='. $code .'&error=' . urlencode( $error_msg ) );			
		}
		
		//-- escape the data to prevent SQL injection
		$new_pwd 	= $DB->real_escape_string( $new_pwd );	
		$email		= $DB->real_escape_string( $email );	
		$code		= $DB->real_escape_string( $code );	
		
		if( is_valid_reset_request( $email, $code ) )
		{
			//-- update the password
			$is_pwd_updated = $DB->query( "UPDATE `tblUsers` SET `password` = SHA1('$new_pwd') WHERE `email` = '$email'");
			
			if( $is_pwd_updated )	//-- if password is update..
			{
				//-- delete the reset request from the db
				$DB->query( "DELETE FROM `tblPwdReset` WHERE `email` = '$email'");
				
				$success_msg = "You have successfully changed your password!";
				
				//-- redirect to login page
				redirect( 'login.php?success=' . urlencode( $success_msg ) );
			} 			
			else 
			{
				$error_msg = "Sorry, unable to perform this action. Please try again or contact the ADMIN!";
				
				//-- redirect 
				redirect( 'login.php?error=' . urlencode( $error_msg ) );
			}
		} 
		else 
		{
			$error_msg = "Sorry, invalid reset request!";
			
			//-- redirect 
			redirect( 'login.php?error=' . urlencode( $error_msg ) );
		}		
		
	}
	
	//-- to check whether email exists already in our db or not
	function is_valid_reset_request( $email, $code )
	{
		global $DB; 	//-- accessing the globally declared DB connection variable
		
		$result = $DB->query( "SELECT `reset_time` FROM `tblPwdReset` WHERE `email` = '$email' AND `reset_code` = '$code'");
		
		if( $result )
		{	
			if( $result->num_rows > 0 ) 
			{
				return true;
			}
		}	
		
		return false;
	}
	
	$_SESSION['security_token'] = uniqid();	//-- generate a unique id and store it in the session
	
	include_once '_inc/header.php';
?>

	<div class="container">
			
		<div class="row center">
			<h5 class="header col s12 light">Reset Password</h5>
		</div>
	  
		<div class="loginregister_container">
			<h6 class="center">Please enter new password</h6>
			
			<!-- Login Box -->
			<form method="POST" action="password_reset.php?email=<?php echo urlencode( $email ); ?>&code=<?php echo urlencode( $code ); ?>">			
				<div class="input-field">
					<input name="new_pwd" placeholder="New Password" id="in_new_pwd" type="password" class="validate" required>
					<label for="in_new_pwd">New Password</label>
				</div>
				
				<div class="input-field">
					<input name="confirm_pwd" placeholder="Confirm Password" id="in_confirm_pwd" type="password" class="validate" required>
					<label for="in_confirm_pwd">Confirm Password</label>
				</div>
							
				<div class="center">
					<input type="hidden" name="security_token" value="<?php echo $_SESSION['security_token']; ?>" />
					<button name="submit" value="1" type="submit" class="waves-effect waves-light btn-small">Update</button>
				</div>
				
			</form>
			<!-- /Login Box -->
			
			
		</div>
		
	</div>
	
	<!-- Footer -->
	<?php include_once '_inc/footer.php'; ?>
	<!-- /Footer -->
	
  </body>
</html>		