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
$id=$_POST['id'];
$name = $_POST['name'];
$des = $_POST['des'];
$format = $_POST['format'];
$no_candidates =$_POST['no_candidates'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$date = $yy."-".$mm."-".$dd;


$query = "update z_exam set name='$name',des='$des',date='$date',format='$format',no_candidates='$no_candidates' where id='$id'";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"$name Details updated successfully ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_edit_exam.php\";</script>";
}


?>