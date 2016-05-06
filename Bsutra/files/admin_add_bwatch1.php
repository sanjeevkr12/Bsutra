<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
?><title>Processing ... </title><?
include("db.php");
$title = $_POST['title'];
$link = $_POST['link'];


$query = "insert into z_watch values ('','$title','$link')";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"B-School Watch Added successfully ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_add_bwatch.php\";</script>";
}


?>