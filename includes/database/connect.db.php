 <?php
 ini_set('display_errors', 'On');
error_reporting(E_ALL);
 $db_host='localhost';
 $db_user='root';
 $db_pass='4141';
 $db_name='chat';
 if($connection=mysqli_connect($db_host,$db_user,$db_pass))
 {
 	$feedback[]="connected to Database server...<br />";
 	if($database=mysqli_select_db($connection,$db_name))
 	{
 		$feedback[]="Database has been selected....<br />";
 	}
 	else
 	{
 		$feedback[]="Database was not found";
 	}
 }
 else
 {
 	$feedback[]="Unable to connect to MYSQL server.<br />";
 }

 ?>