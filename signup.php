<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');

if(isset($_SESSION["username"])){ // is the user already logged in?
	redirect_to('home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat Application</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/main.css" />
</head>
<body>
<div class="main">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">chatOn</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="signup.php">Sign Up</a>
        <a class="nav-item nav-link" href="login.php">Log In</a>
      </div>
    </div>
  </nav>


<div class="sign container">
  <form role="form" name="signup" action="signup_action.php" method="post" onsubmit="return validateForm();" >
    <div class="form-group">
      <label for="username">Enter Username</label>
      <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username_">
      <small id="usernameHelp" class="form-text text-muted">Enter an unique username.</small>
    </div>
    <div class="form-group">
      <label for="password">Enter Password</label>
      <input type="password" class="form-control" id="new_password" name="new_password_" autocomplete="new-password">
    </div>
    <div class="form-group">
      <label for="password">Confirm Password</label>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password_" autocomplete="new-password">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
  </form>
</div>


</div>

<script type="text/javascript" src="public/javascript/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/javascript/script.js"></script>
<script type="text/javascript" src="public/javascript/send.js"></script>
<script>
  function validateForm(){
      var fields = ["username_","new_password_","confirm_password_"];
      var flag=0;
      if (document.forms["signup"][fields[0]].value === "") {
          flag=1;
      }
      if (document.forms["signup"][fields[1]].value === "") {
          flag=1;
      }
    if(document.forms["signup"][fields[1]].value !== document.forms["signup"][fields[2]].value){
          flag=1;
    }
      if(flag === 1){
        return false;
      }
      return true;
  }
</script>
</body>
</html>
