<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');
if(isset($_POST['send']))
{
	if(send_msg($_POST['sender'], $_POST['message']))
	{
		echo "Message Sent";
	}else{
		echo"Message failed to sent";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Application</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
<div id="input">
<form action="index.php" method="post">
  <label>Enter Name:<input type="text" name="sender"></label>
  <label>Enter Message:<input type="text" name="message"></label><br />
  <input type="submit" name="send" value="Send Message">	
</form>
</div>
<div id="messages">
</div>


<script type="text/javascript" src="public/javascript/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/javascript/script.js"></script>

</body>
</html>
