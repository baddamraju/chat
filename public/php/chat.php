<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once("../../includes/database/connect.db.php");
require_once("../../includes/functions/chat.func.php");

$messages=get_msg();
foreach($messages as $message)
{
	echo '<strong>'.$message['sender'].' Sent</strong><br />';
	echo $message['message'].'<br /><br />';
}

?>

