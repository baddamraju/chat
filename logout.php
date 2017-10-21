<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');
$_SESSION = array();
session_destroy();
if(isset($_COOKIE['username'])){
  setcookie('username',null, time() - 3600);
}
redirect_to('index.php');
?>
