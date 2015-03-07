<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$client_id = '596034556346-6pg8nd0qftq395qa16tdu8hvev5ep6vh.apps.googleusercontent.com'; //Google CLIENT ID
$client_secret = 'PGgdwhUOKZbBCivRc8yMoHAY'; //Google CLIENT SECRET
$redirect_url = 'http://localhost/files/ci/welcome/sign_up';  //return url (url to script)
$homeurl = 'http://localhost/files/ci/';  //return to home
$developer_key = '';  //Google developer key

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('touktoukcar');
$gClient->setClientId($client_id);
$gClient->setClientSecret($client_secret);
$gClient->setRedirectUri($redirect_url);
$gClient->setDeveloperKey($developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>