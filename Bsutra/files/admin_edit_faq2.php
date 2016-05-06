<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
?><title>Processing ...</title><?
include("db.php");
$id = $_POST['id'];
$ques = $_POST['ques'];
$ans = $_POST['ans'];


$query = "update z_faq set ques='$ques',ans='$ans' where id='$id';";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"FAQ Info Updated ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_edit_faq.php\";</script>";
}
?>