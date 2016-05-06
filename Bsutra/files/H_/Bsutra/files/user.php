<?php
 session_start();
 if(!isset($_SESSION["username"]))
  {
  $show=0;
  }
  else 
  {  
  $user = $_SESSION["username"]; 
  $show=1;
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
      <td height="142" valign="top" background="images/design_01.jpg"><? 
			include("top.php");
		?></td>
  </tr>
	<tr>
      <td height="23" align="center" valign="top" background="images/design_03.jpg"><? 
			include("menu.php");
		?></td>
  </tr>
	
	<tr>
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="10"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">User Login </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                <? if($show==1)
				   echo "You're already logged in. <br /><br />Click <a class=\"blue_text_small\"href=\"user_dashboard.php\">here</a> to go to your dashboard.";
                else { ?>
                <form name="form1" method="post" action="user_verify.php">
                  <p>&nbsp;</p>
                  
                  <table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                    <tr>
                      <td width="17%">Email (Username)</td>
                      <td width="83%"><label>
                        <input name="user" type="text" class="black_text" id="user" size="40" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><input name="pass" type="password" class="black_text" id="pass" size="40" maxlength="255"></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <input name="Submit" type="submit" class="black_text" value="Login">
                      </label></td>
                      </tr>
                  </table>
                  <p>&nbsp;</p>
                </form> 
                
               <? } ?>
                                 <p>&nbsp;</p>                </td>
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
		<? 
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>