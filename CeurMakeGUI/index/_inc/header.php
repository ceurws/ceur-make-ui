<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $page_title; ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- /FontAwesome Icons -->
  <link href="css/jquery.steps.css" rel="stylesheet">
  <link href="css/new.css" rel="stylesheet">
  <style>
  .error {
    color:red;
    display: none;        
  }
  </style>
  
  <script type="text/javascript" src="./helperJS/fieldValidator.js" ></script>
</head>
<body>
  <nav class="blue-grey darken-1" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo">CEUR Make</a>
      <ul class="nav_center_box hide-on-med-and-down">
        <li><a href="index.php"> Home</a></li>
        <li><a href="proceedings.php"> Proceedings</a></li>
        <li><a href="publish.php"> Publish</a></li>
        <li><a href="issue.php"> Issues</a></li>

      </ul>
	  
	  <ul class="top_right_menus hide-on-med-and-down">
		<?php if( is_logged_in() ) { ?>
			<li><a href="logout.php"> <i class="tiny material-icons menu_icon">lock</i> Logout</a></li>
		<?php } else { ?>		
			<li><a href="login.php"> <i class="tiny material-icons menu_icon">lock</i> Login</a></li>
			<li><a href="signup.php"> <i class="tiny material-icons menu_icon">lock_outline</i> Signup</a></li>        
		<?php } ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php"> Home</a></li>
        <li><a href="proceedings.php"> Proceedings</a></li>
        <li><a href="publish.php"> Publish</a></li>
        <li><a href="issue.php"> Issues</a></li>
		
		<?php if( is_logged_in() ) { ?>
			<li><a href="logout.php"> <i class="tiny material-icons menu_icon">lock</i> Logout</a></li>
		<?php } else { ?>		
			<li><a href="login.php"> <i class="tiny material-icons menu_icon">lock</i> Login</a></li>
			<li><a href="signup.php"> <i class="tiny material-icons menu_icon">lock_outline</i> Signup</a></li>
		<?php } ?>
		
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  <!-- Display error -->
  <?php if( isset( $_GET['error'] ) ) { ?>
	<div class="error_box"><strong>ERROR:</strong>  <?php echo $_GET['error']; ?></div>
  <?php } ?>
  <!-- /Display error -->
  
  <!-- Display success -->
  <?php if( isset( $_GET['success'] ) ) { ?>
	<div class="success_box"><strong>SUCCESS:</strong>  <?php echo $_GET['success']; ?></div>
  <?php } ?>
  <!-- /Display success -->