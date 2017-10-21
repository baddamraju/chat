<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Application</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/main.css" />
</head>
<body>
<div id="input">
	<div id="feedback">

	</div>
	<form action="#" method="post" id="form_input">
	  <label>Enter Name:<input type="text" name="sender" id="sender"></label>
	  <label>Enter Message:
			<textarea name="message" col="12" rows="4" id="msg"></textarea>
		</label><br />
	  <input type="submit" name="send" value="Send Message" id="submit_btn">
	</form>
</div>
<div id="messages">

</div>


<script type="text/javascript" src="public/javascript/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/javascript/script.js"></script>
<script type="text/javascript" src="public/javascript/send.js"></script>
</body>
</html>
