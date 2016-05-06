<?
include("db.php");
$name = $_POST['name'];
$category = $_POST['category'];
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

$email = "contact@bsutra.com";

$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Bsutra Bot <no-reply@bsutra.com>';

// The subject
$subject = "Add B-School Info - $name";
// The message
$message = "
Name - $name <br><br>
category - $category<br><br>
State - $state<br><br>
City - $city<br><br>
Rank - $rank<br><br>
Grade - $grade <br><br>
Description - $desc<br><br>
Fees - $fees<br><br>
Entrance Exam - $exam<br><br>
CAT Cutoff Percentile - $percentile<br><br>
Median Salary - $salary<br><br>
Female - Male Ratio - $mfr<br><br>
Major Events - $events<br><br>
Daily Contact Hours - $contact<br><br>
AICTE Approved - $aicte<br><br>
Student Strenght - $student <br><br>
Faculty - $faculty<br><br>
Forms Available At - $forms<br><br>
Other Info - $other<br><br>
Bsutra Forum Link - $forum<br><br>
Official Website - $website<br><br>
Enquiry Email Address - $email<br><br>
";

mail($email, $subject, $message, $headers);


echo "<script language=\"javascript\">alert(\"Thank You for your contribution. Your Submission requires Administrators Approval before being displayed\");location.href=\"index.php\";</script>";

?>