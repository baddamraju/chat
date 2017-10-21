<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('includes/core.inc.php');

if(isset($_POST["submit"])){
   $username1 = mysqli_real_escape_string($connection,$_POST["username_"]);
   $password = mysqli_real_escape_string($connection,$_POST["new_password_"]);
   $password = sha1($password);
   $query_check = "SELECT * FROM users WHERE username = '".$username1."'";
   $temp = mysqli_query($connection,$query_check);
   if(mysqli_num_rows($temp) != 0){
     redirect_to('signup.php');
   }
   $query = "INSERT INTO users (username,password) VALUES ('{$username1}','{$password}')";
   $result = mysqli_query($connection,$query);
   if($result){
      redirect_to('home.php');
   } else{
     redirect_to('signup.php');
   }
} else{
	redirect_to('signup.php');
}

?>
