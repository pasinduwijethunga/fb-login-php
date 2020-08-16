<?php
// session start

session_start();

require './vendor/autoload.php';

$fb = new Facebook\Facebook([
        'app_id' => '846516509086157',
        'app_secret' => '3f07b223110806a702a711785bb089e5',
        'default_graph_vision' => 'v2.7',

]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/fblogin/");
