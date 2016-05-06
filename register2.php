<?php
session_start();
?>
<?php 
   //to check CAPCHA
   //session_start();
   if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code'])) ) {
      // Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
      unset($_SESSION['security_code']);
   } else {
      // ERROR MESSAGE !!
	  echo "<script language=\"javascript\">alert(\"ERROR : The text you entered did not match the text shown. ... Redirecting to Registration Page.\");location.href=\"register.php\";</script>";
	  
	  exit(0);
	 
   }
?>
<html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF">
<!-- ImageReady Slices (design.psd) -->
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="Table_01"><!--DWLayoutTable-->
	<tr>
		<td width="100%" height="142" background="images/design_01.jpg">
			<img src="images/design_02.jpg" width="974" height="142" alt=""></td>
	</tr>
	<tr>
		<td height="47" align="left" valign="top" background="images/design_03.jpg"><?php 
			include("menu.php");
		?></td>
	</tr>
	<tr>
		<td align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="10"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Register for BSutra</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                
                
                
                
 <?php 
include("db.php"); 
 $done=0;
 $flag=1;

if($_POST['email']!="")
{

$sql="select * from z_user where email='" . $_POST['email'] . "'";
$rs=mysql_query($sql);
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
$rs=mysql_query($sql);
$numrows=mysql_num_rows($rs);
if($numrows>0)
{
	$msg=  "<div class=\"warning\" >This Email Address ".$_POST['email']." has already registered.</div>"."<br>";
	echo "<div class=\"warning\" >This Email Address ".$_POST['email']." has already registered.</div>"."<br><p><span class=\"black_text\">
                  <input name=\"button\" type=\"button\" class=\"yellow_min\" 
onClick=\"javascript: history.go(-1)\" value=\"&lt;&lt; Go Back\">
                </span></p>";
	$flag=0;
	
}
}


if(!ereg("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$",$_POST['email']))
{	
	$flag=0;
	echo "<br><span class=\"warning\" > Please enter a valid email address</span>"."<br>"."<p><span class=\"black_text\">
                  <input name=\"button\" type=\"button\" class=\"yellow_min\" 
onClick=\"javascript: history.go(-1)\" value=\"&lt;&lt; Go Back\">
                </span></p>";
}
if($flag==1)
{
$pwd=md5("$_POST[password2]");
$sql="INSERT INTO z_user (name,email,password) VALUES ('$_POST[name]','$_POST[email]','$pwd')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  $done=1;
//mysql_close($sql);

					if($done==1)
					{
					echo "<span class=\"black_text\">Thanks for registering Bsutra.com</span>";
					echo "<br>"."<p><br></p>";
					echo "<span class=\"black_text\"\>You now can login with your Email(Username) and Password and access the website features.";
					echo "<br><br>Click <a  class=\"blue_text_big\" href=\"user.php\">here</a> to Login.</span>";
					
					$email = $_POST['email'];
					echo "<form action=\"blog/wp-login.php?action=register\" method=\"post\" name=\"form1\" target=\"_blank\" id=\"form1\">
  <label></label>
  <input name=\"user_login\" type=\"hidden\" id=\"user_login\" value='$email' />
  <input name=\"user_email\" type=\"hidden\" id=\"user_email\" value='$email' />
  <label></label>
  <p>
    <label>
    <input type=\"submit\" class=\"black_text\" name=\"Submit\" value=\"Register Me for The BSutra Blog Also !\" />
    </label>
  </p>
</form>";
					}
	}
					?>  
                
                
                
                
                
             
                
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </form>                  <p>&nbsp;</p>
                  </td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td background="images/bottom_mid.jpg">&nbsp;</td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>              <p>&nbsp;</p>            </td>
            </tr>
          <tr>
            <td align="left" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          
        </table>
	  <p>&nbsp;</p></td>
	</tr>
	<tr>
		<td height="186" valign="top" bgcolor="#000000">
		<?php 
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>