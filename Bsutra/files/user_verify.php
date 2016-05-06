<?
session_start();
$_SESSION["username"] = $_POST['user'];
?>
<title>Verifying...</title>
<?
include("db.php");
$user = $_POST['user'];
$pass = $_POST['pass'];

$pass = md5($pass);

$query = "select * from z_user where email='$user' && password='$pass'";
$dbresult = mysql_query($query);

if(mysql_num_rows($dbresult) > 0)
	{
	echo "<script language=\"javascript\">alert(\"Login Successful ... Redirecting to your Dashboard.\");location.href=\"user_dashboard.php\";</script>";
}
else
	{
	session_destroy();
	echo "<script language=\"javascript\">alert(\"Incorrect Login !!! ... Redirecting to your Login Page.\");location.href=\"user.php\";</script>";
}	
?>