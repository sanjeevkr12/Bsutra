<?php
 
 if(isset($_SESSION["username"]))
  {
		$user = $_SESSION["username"]; 
		include("top_user.php");

  } 
  
  else if(isset($_SESSION["user"]))
  {
  		$user = $_SESSION["user"]; 
		include("top_admin.php");
		
  }  
  
  else
  {
?>
<link href="bsutra.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="menu">
    <td height="142" align="left" valign="top" background="images/design_01.jpg" class="warning"><img src="logo.png" alt="Bsutra Logo" width="302" height="142" longdesc="http://www.bsutra.com" /></td>
    <td width="500" align="right" valign="top" background="images/design_01.jpg" class="warning">
      <table width="300" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td align="right" class="blue_text_big"><a href="user.php"><strong class="warning">Login Here</strong></a> | <a href="forgot_password.php"><span class="warning">Forgot Password</span></a> </td>
        </tr>
        <tr>
          <td align="right"><a href="register.php"><span class="warning"> New User ?? Register here </span></a></td>
        </tr>
      </table>
    <p><a href="register.php"><span class="warning">&nbsp;&nbsp;&nbsp;</span></a></p></td>
  </tr>
</table>

<?php
}	//end of else
?>
