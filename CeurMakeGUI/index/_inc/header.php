<?php
	include_once '_inc/common.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $page_title; ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/jquery.steps.css" rel="stylesheet">
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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">CEUR Make</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"> Home</a></li>
        <li><a href="proceedings.php"> Proceedings</a></li>
        <li><a href="publish.php"> Publish</a></li>
        <li><a href="issue.php"> Issues</a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>