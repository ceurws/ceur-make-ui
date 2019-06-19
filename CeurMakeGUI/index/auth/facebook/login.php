<?php
include '../../_inc/common.php';
include 'php-graph-sdk/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => $APP_CONFIG['fb_app_id'], // Replace {app-id} with your app id
  'app_secret' => $APP_CONFIG['fb_app_secret'],
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl( BASE_URL . '/auth/facebook/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';