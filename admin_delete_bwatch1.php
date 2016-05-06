<?
include("db.php");
$id = $_GET['s'];

$query = "delete from z_watch where id='$id'";
$dbresult = mysql_query($query);

if($dbresult)
	echo "<script language=\"javascript\">alert(\"B-School Watch deleted successfully ... Redirecting to Dashboard\");location.href=\"admin_dashboard.php\";</script>";
else
	echo "<script language=\"javascript\">alert(\"Some Error occured  ... Redirecting back.. \");location.href=\"admin_delete_bwatch.php\";</script>";

?>