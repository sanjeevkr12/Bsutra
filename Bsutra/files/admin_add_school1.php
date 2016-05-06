<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
?><?
include("db.php");
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
$aicte = $_POST['aicte'];
$student = $_POST['student'];
$faculty = $_POST['faculty'];
$forms =$_POST['forms'];
$other = $_POST['other'];
$forum = $_POST['forum'];
$website = $_POST['website'];
$email = $_POST['email'];

$query = "insert into z_profile values ('','$name','$state','$rank','$desc','$fees','$percentile','$other','$forum','$email','$salary','$mfr','$city','$grade','$exam','$events','$contact','$aicte','$student','$faculty','$forms','$website');";
$dbresult= mysql_query($query);

if($dbresult)
{
	echo "<script language=\"javascript\">alert(\"BSchool added to BSutra Database ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
}
else
{
	echo "<script language=\"javascript\">alert(\"Error Occured. Please try again.\");location.href=\"admin_add_school.php\";</script>";
}


?>