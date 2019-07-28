<?php
	include_once '_inc/common.php';
	
	//https://developers.google.com/identity/sign-in/web/sign-in#before_you_begin
	$page_title = 'Login';
	
	//-- if already logged in, redirect to the home page
	if( is_logged_in() )
	{
		redirect( 'index.php' );
	}
	
	//-- when login form is submitted by user..
	if( isset( $_POST['login'] ) )
	{
		$email 		= isset( $_POST['email'] ) ? trim( $_POST['email'] ) : '';
		$password 	= isset( $_POST['password'] ) ? trim( $_POST['password'] ) : '';
		
		//-- for security
		$security_token = isset( $_POST['security_token'] ) ? trim( $_POST['security_token'] ) : '';
		if( $security_token != $_SESSION['security_token'] )
		{	
			$error_msg = "Security token mismatch! Please try again.";
			
			//-- redirect to login page
			redirect( 'login.php?error=' . urlencode( $error_msg ) );		
		}
		
		//-- remove the security token from session
		if( isset( $_SESSION['security_token'] ) )
		{
			unset( $_SESSION['security_token'] );	
		}
		
		if( empty( $email ) OR empty( $password ) )
		{
			$error_msg = "All fields are mandatory!";
			
			//-- redirect to login page
			redirect( 'login.php?error=' . urlencode( $error_msg ) );			
		}
		
		//-- escape the data to prevent SQL injection
		$email 		= $DB->real_escape_string( $email );
		$password 	= $DB->real_escape_string( $password );
		
		//-- query the db
		$result = $DB->query( "SELECT `first_name`, `user_id`, `status` FROM `tblUsers` WHERE `email` = '$email' AND `password` = SHA1('$password') LIMIT 1");
		
		if( $result->num_rows > 0 ) 	//-- check if its successful
		{
			$row = $result->fetch_assoc();
			
			if( $row['status'] == '0' )
			{	
				$error_msg = "Please click on the verification link in the email received. Check SPAM folder, if you couldn't find it!";
			
				//-- redirect to login page
				redirect( 'login.php?error=' . urlencode( $error_msg ) );
			}
			else
			{	
				//-- store it in session
				$_SESSION['user_id'] 	= $row['user_id'];
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['login_type'] = 'EMAIL';	

				redirect( 'index.php' );	
			}
		} 
		else 
		{
			$error_msg = "Invalid login credentials!";
			
			//-- redirect to login page
			redirect( 'login.php?error=' . urlencode( $error_msg ) );
		}
	}
	
	$_SESSION['security_token'] = uniqid();	//-- generate a unique id and store it in the session
	
	
	include_once '_inc/header.php';
?>
	
	<script src="https://apis.google.com/js/api:client.js"></script>
	
	<script>
	  //-- FB Javascript SDK initialization
	  window.fbAsyncInit = function() {
		FB.init({
		  appId            : '<?php echo $APP_CONFIG['fb_app_id']; ?>',
		  autoLogAppEvents : true,
		  xfbml            : true,
		  version          : 'v3.3'
		});		
	  };	
	</script>
	<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>

	  
	<div class="container">
		
		<h3 class="header center blue-grey-text">Login to CEUR Make for better experience</h3>
		<div class="row center">
			<h5 class="header col s12 light">CEUR Make uses cookies for authentication</h5>
		</div>
	  
		<div class="loginregister_container">
			<h6 class="center">Login</h6>
			
			<!-- Login Box -->
			<form method="POST" action="login.php">			
				<div class="input-field">
					<input name="email" placeholder="Email" id="in_email" type="email" class="validate" required>
					<label for="in_email">Email</label>
				</div>
				
				<div class="input-field">
					<input name="password" placeholder="Password" id="in_password" type="password" class="validate" required>
					<label for="in_password">Password</label>
				</div>
			
				<div class="center">
					<input type="hidden" name="security_token" value="<?php echo $_SESSION['security_token']; ?>" />
					<button name="login" value="1" type="submit" class="waves-effect waves-light btn-small">Login</button>
				</div>
				
				<br>
				
				<div class="center">
					<a href="forgot_pwd.php">Forgot password ?</a>
				</div>
			</form>
			<!-- /Login Box -->
			
			<div class="or_box">
				<div class="or_box_content">or</div>
			</div>
			
			
			<!-- Custom Google Login Button -->
			<div id="gSignInWrapper" class="btn_google">				
				<div id="customBtn" class="customGPlusSignIn">
				  <span class="icon"></span>
				  <span class="buttonText"><i class="fab fa-fw fa-google"></i> Login with Google</span>
				</div>
			</div>
			<!-- /Custom Google Login Button -->
			
			<a href="#" id="btnFacebookLogin" class="btn_fb"><i class="fab fa-fw fa-facebook-f"></i> Login with Facebook</a>
		</div>
		
	</div>

	<!-- Footer -->
	<?php include_once '_inc/footer.php'; ?>
	<!-- /Footer -->
	
	<style>
		.btn_fb{
			background: #416BC1;
			color: white;
			
			width: 100%;
			padding: 10px;
			text-align: center;
			
			display: block;
			margin: 5px 0;
		}
		
		.btn_google{
			cursor: pointer;
				
			background: #cf4333;
			color: white;
			
			width: 100%;
			padding: 10px;
			text-align: center;
			
			display: block;
			margin: 5px 0;
		}	
	</style>
	
	<script>
		//-- for custom Google login button
		var googleUser = {};
		var startApp = function() {
			gapi.load('auth2', function(){
				// Retrieve the singleton for the GoogleAuth library and set up the client.
				auth2 = gapi.auth2.init({
					client_id: '<?php echo $APP_CONFIG['google_client_id']; ?>',
					cookiepolicy: 'single_host_origin',
					// Request scopes in addition to 'profile' and 'email'
					//scope: 'additional_scope'
				});
				attachSignin(document.getElementById('customBtn'));
			});
		};
	  
		startApp();

		function attachSignin(element) {
			console.log(element.id);
			auth2.attachClickHandler(element, {},
			function(googleUser) {
				//-- call the function on successful login
				onSignIn(googleUser);
				
			}, function(error) {
			  //alert(JSON.stringify(error, undefined, 2));
			});
		}
		//----------------------------------------------------------
  
		//-- when successfully logged in by the user
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
		  
			var full_name = profile.getName().split(" ", 2);		
		  
			var data = {
			  'first_name' 		: full_name[0],
			  'last_name' 		: full_name[1],
			  'email'			: profile.getEmail(),
			  'auth_id'			: profile.getId(),		
			  'login_type'		: 'GOOGLE',			  
			  'security_token'	: '<?php echo $_SESSION['security_token']; ?>'
			};
		  
		  	send_login( data );	 
		}
		
		//----------------------------------------------------------
		
		jQuery(function($){
			//-- when FB login button is clicked
			$('#btnFacebookLogin').on('click', function(){			
				FB.login(function(response) {
					if (response.authResponse) {						
						
						getFBUserData();
						
					} else {
					 console.log('User cancelled login or did not fully authorize.');
					}
				}, {scope: 'email'});
				
				return false;
			});
		});
		
		//-- fetch the FB user details..
		function getFBUserData() {
			FB.api('/me', {fields: 'last_name,first_name,email,id'}, function(response) {
				console.log( response );
				var data = {
				  'first_name' 		: response.first_name,
				  'last_name' 		: response.last_name,
				  'email'			: response.email,
				  'auth_id'			: response.id,		
				  'login_type'		: 'FACEBOOK',			  
				  'security_token'	: '<?php echo $_SESSION['security_token']; ?>'
				};
			  
				/*
				//-- just for displaying the data as comma separated string
				var msg = Object.keys(data).map(function(k){return data[k]}).join(", ");
				alert( msg );
				*/
				
				send_login( data );	 
			});
		}
		
		//----------------------------------------------------------
		
		//-- send login details via ajax
		function send_login( user_data )
		{
			$.ajax({
				url: "auth/ajax.php",
				data: user_data,
				method: "POST"
			})
			  .done(function( response ) {

				alert( response.msg );
				
				if( response.error )
				{
					if( response.data == 'security_token_mistach' )
					{
						window.location.reload();
					}
				}
				else
				{
					window.location.href = 'index.php';
				}					
			  });
		}
	</script>
  </body>
</html>	
