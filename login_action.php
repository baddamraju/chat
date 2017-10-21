<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');

if(isset($_POST["submit"])){
   $username1 = mysqli_real_escape_string($connection,$_POST["username_"]);
   $password = mysqli_real_escape_string($connection,$_POST["password_"]);
   $password = sha1($password);
   $query = "SELECT * FROM users WHERE username = '".$username1."'";
   $result = mysqli_query($connection,$query);
   if(mysqli_num_rows($result) > 0){
     $user = mysqli_fetch_assoc($result);
     if($user["password"] === $password){ // compare encrypted passwords
       $_SESSION["username"] = $username1; // set up session's username variable
       echo $_SESSION["username"];
       redirect_to('home.php'); // okay logged in!!
       } else{
        redirect_to('login.php');
       }
    } else{
      redirect_to('login.php');
    }
} else {
  redirect_to('login.php');
}
?>
