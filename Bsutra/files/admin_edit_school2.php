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
$name = $_POST['name'];
$state = $_POST['state'];
$city = $_POST['city'];
$rank = $_POST['rank'];
$grade = $_POST['grade'];
$desc = $_POST['desc'];
$fees = $_POST['fees'];
$exam=$_POST['exam'];
$percentile = $_POST['percentile'];
$salary = $_POST['salary'];
$mfr = $_POST['mfr'];
$events = $_POST['events'];
$contact = $_POST['contact'];
$ai = $_POST['ai'];
$student = $_POST['student'];
$faculty = $_POST['faculty'];
$forms =$_POST['forms'];
$other = $_POST['other'];
$forum = $_POST['forum'];
$website = $_POST['website'];
$email = $_POST['email'];


$query = "update z_profile set name='$name',state='$state',rank='$rank',des='$desc',fees='$fees',percentile='$percentile',other='$other',forum='$forum',email='$email',salary='$salary',mfr='$mfr',grade='$grade',exam='$exam',events='$events',contact='$contact',aicte='$ai',student='$student',faculty='$faculty',forms='$forms',website='$website' where id='$id';";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"$name Info Updated ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_edit_school.php\";</script>";
}
?>