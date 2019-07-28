<?php
	include_once '_inc/common.php';

	$page_title = 'Password Reset';
	
	//-- if already logged in, redirect to the home page
	if( is_logged_in() )
	{
		redirect( 'index.php' );
	}
	
	//-- when form is submitted by user..
	if( isset( $_POST['submit'] ) )
	{
		$email 		= isset( $_POST['email'] ) ? trim( $_POST['email'] ) : '';		
		
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
		
		if( empty( $email ) )
		{
			$error_msg = "All fields are mandatory!";
			
			//-- redirect 
			redirect( 'forgot_pwd.php?error=' . urlencode( $error_msg ) );			
		}
		
		//-- escape the data to prevent SQL injection
		$email = $DB->real_escape_string( $email );
		
		if( is_email_exists( $email ) )
		{
			$new_code = sha1( time() . $email . 'f06GoT_pmD' . time() );
			
			//-- query the db
			$result = $DB->query( "
				INSERT INTO `tblPwdReset`( `email`, `reset_code`, `reset_time`) 
					VALUES( '$email', '$new_code', NOW() ) 
				ON DUPLICATE KEY
					UPDATE `reset_code` = '$new_code', `reset_time` = NOW()");
			
			if( $result ) 	//-- check if its successful
			{
				//-- verification link				
				$verification_link = BASE_URL . '/password_reset.php?email=' . urlencode( $email ) . '&code=' . $new_code;
			
				//-- send email with verification link			
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: hello@http://vishnunandakumar.com' . "\r\n" .
					'Reply-To: hello@http://vishnunandakumar.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

				$subject = 'Password Reset - CEUR Make';
				$message = '
					Dear User,<br>
					You have initiated a password reset. <br><br>
					Please click on the following link to reset your password: ' . $verification_link;
							
				
				mail( $email, $subject, $message, $headers );
				//-----------------------
			
				$success_msg = "Please check your email and click on the link to create a new password!";
				
				//-- redirect to login page
				redirect( 'login.php?success=' . urlencode( $success_msg ) );
			} 
			else 
			{
				$error_msg = "Sorry, unable to update the database!";
				
				//-- redirect 
				redirect( 'forgot_pwd.php?error=' . urlencode( $error_msg ) );
			}
		} 
		else 
		{
			$error_msg = "Sorry, unable to find your account!";
			
			//-- redirect 
			redirect( 'forgot_pwd.php?error=' . urlencode( $error_msg ) );
		}		
		
	}
	
	//-- to check whether email exists already in our db or not
	function is_email_exists( $email )
	{
		global $DB; 	//-- accessing the globally declared DB connection variable
		
		$email = $DB->real_escape_string( $email );
		
		$result = $DB->query( "SELECT `first_name`, `user_id` FROM `tblUsers` WHERE `email` = '$email' LIMIT 1");
		
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
			<h5 class="header col s12 light">Forgot Password</h5>
		</div>
	  
		<div class="loginregister_container">
			<h6 class="center">Enter your email</h6>
			
			<!-- Login Box -->
			<form method="POST" action="forgot_pwd.php">			
				<div class="input-field">
					<input name="email" placeholder="Email" id="in_email" type="email" class="validate" required>
					<label for="in_email">Email</label>
				</div>
							
				<div class="center">
					<input type="hidden" name="security_token" value="<?php echo $_SESSION['security_token']; ?>" />
					<button name="submit" value="1" type="submit" class="waves-effect waves-light btn-small">Reset</button>
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