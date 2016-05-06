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
$name = $_POST['name'];
$des = $_POST['des'];
$format = $_POST['format'];
$no_candidates =$_POST['no_candidates'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$date = $yy."-".$mm."-".$dd;


$query = "insert into z_exam values ('','$name','$des','$date','$format','$no_candidates')";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"Exam Details added successfully ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_add_exam.php\";</script>";
}


?>