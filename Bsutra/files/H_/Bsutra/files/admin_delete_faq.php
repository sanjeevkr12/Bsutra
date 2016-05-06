<?
include("db.php");
$id = $_GET['s'];

$query = "delete from z_faq where id='$id'";
$dbresult = mysql_query($query);

if($dbresult)
	echo "<script language=\"javascript\">alert(\"FAQ deleted successfully ... Redirecting to EDIT FAQ Page\");location.href=\"admin_edit_faq.php\";</script>";
else
	echo "<script language=\"javascript\">alert(\"Some Error occured  ... Redirecting to EDIT FAQ Page\");location.href=\"admin_edit_faq.php\";</script>";

?>