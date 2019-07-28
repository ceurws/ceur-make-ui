<?php
	include_once '_inc/common.php';
	
	$page_title = 'Signup';
	
	//-- if already logged in, redirect to the home page
	if( is_logged_in() )
	{
		redirect( 'index.php' );
	}
	
	//-- when register form is submitted by user..
	if( isset( $_POST['register'] ) )
	{
		$email 		= isset( $_POST['email'] ) ? trim( $_POST['email'] ) : '';
		$password 	= isset( $_POST['password'] ) ? trim( $_POST['password'] ) : '';
		$first_name	= isset( $_POST['first_name'] ) ? trim( $_POST['first_name'] ) : '';
		$last_name	= isset( $_POST['last_name'] ) ? trim( $_POST['last_name'] ) : '';
		
		if( empty( $email ) OR empty( $password ) OR empty( $first_name ) OR empty( $last_name ) )
		{
			$error_msg = "All fields are mandatory!";
			
			//-- redirect to signup page
			redirect( 'signup.php?error=' . urlencode( $error_msg ) );			
		}
		
		//-- check whether we have this email id is already registered in our database
		if( is_email_exists( $email ) )
		{
			$error_msg = "Email already exists! Please login.";
		
			redirect( 'login.php?error=' . urlencode( $error_msg ) );			
		}	
		
		//-- escape the data to prevent SQL injection
		$email 		= $DB->real_escape_string( $email );
		$password 	= $DB->real_escape_string( $password );
		$first_name = $DB->real_escape_string( $first_name );
		$last_name 	= $DB->real_escape_string( $last_name );
		
		//-- query the db
		$result = $DB->query( "INSERT INTO `tblUsers`(`email`, `password`, `first_name`, `last_name`) VALUES('$email', SHA1('$password'), '$first_name', '$last_name') ");
		
		if( $result ) 	//-- check if its successful
		{
			//-- get the user_id of this newly created User
			$user_id = $DB->insert_id;
			
			//-- verification link
			$verification_code = sha1( time() . $first_name . time() . $email . time() );
			$verification_link = BASE_URL . '/verify_email.php?email=' . urlencode( $email ) . '&code=' . $verification_code;
			
			//-- update the user row with the verification code, in database
			$DB->query( "UPDATE `tblUsers` SET `status` = '0', `email_verification_code` = '". $verification_code ."' WHERE `user_id` = '". $user_id ."' LIMIT 1");
			
			//-- send email with verification link			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: hello@http://vishnunandakumar.com' . "\r\n" .
				'Reply-To: hello@http://vishnunandakumar.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			$subject = 'Account Verification Email - CEUR Make';
			$message = '
				Dear '. $first_name .',<br>
				Thank you for registering an account with CEUR Make. <br><br>
				Please click on the following link to verify your email account: ' . $verification_link;
						
			
			mail( $email, $subject, $message, $headers );
			
			$msg = "Registration is successful. Please check your email and click on the link to activate";
			
			redirect( 'login.php?success=' . urlencode( $msg ) );	
		} 
		else 
		{
			$error_msg = "Something went wrong while inserting to database! " . $DB->error;
			
			//-- redirect to login page
			redirect( 'signup.php?error=' . urlencode( $error_msg ) );
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
	
	include_once '_inc/header.php';
?>

	<!--
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="<?php echo $APP_CONFIG['google_client_id']; ?>">
	
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId            : '<?php echo $APP_CONFIG['fb_app_id']; ?>',
		  autoLogAppEvents : true,
		  xfbml            : true,
		  version          : 'v3.2'
		});
	  };
	</script>
	<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
	-->
	
	  
	<div class="container">
		
		<h3 class="header center blue-grey-text">Create a CEUR Make account for better experience</h3>
		<!--<div class="row center">
			<h5 class="header col s12 light"></h5>
		</div>-->
	  
		<div class="loginregister_container">
			<h6 class="center">Almost done!</h6>
			
			<!-- Login Box -->
			<form method="POST" action="signup.php">	
				<div class="input-field">
					<input name="first_name" placeholder="First Name" id="in_first_name" type="text" class="validate" required>
					<label for="in_first_name">First Name</label>
				</div>
				
				<div class="input-field">
					<input name="last_name" placeholder="Last Name" id="in_last_name" type="text" class="validate" required>
					<label for="in_last_name">Last Name</label>
				</div>
				
				<div class="input-field">
					<input name="email" placeholder="Email" id="in_email" type="email" class="validate" required>
					<label for="in_email">Email</label>
				</div>
				
				<div class="input-field">
					<input name="password" placeholder="Password" id="in_password" type="password" class="validate" required>
					<label for="in_password">Password</label>
				</div>
			
				<div class="center">
					<button name="register" value="1" type="submit" class="waves-effect waves-light btn-small">Sign Up</button>
					
					<p><a href="login.php">Have an account? Sign In</a></p>
					
					<p>By clicking "Sign Up", you agree to the <a href="#">Privacy Policy</a></p>
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
