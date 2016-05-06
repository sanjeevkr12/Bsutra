<?
session_start();
$_SESSION["user"] = $_POST['user'];
?>
<title>Verifying...</title>
<?
include("db.php");
$user = $_POST['user'];
$pass = $_POST['pass'];

$pass = md5($pass);

$query = "select * from z_admin where user='$user' && pass='$pass'";
$dbresult = mysql_query($query);

if(mysql_num_rows($dbresult) > 0)
	echo "<script language=\"javascript\">alert(\"Login Successful ... Redirecting to your Dashboard.\");location.href=\"admin_dashboard.php\";</script>";
else
	echo "<script language=\"javascript\">alert(\"Incorrect Login !!! ... Redirecting to your Login Page.\");location.href=\"admin.php\";</script>";
?>