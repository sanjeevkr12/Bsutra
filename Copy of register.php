<html>
<head>
<title>BSutra | Formula for Success</title>
<script type="text/javascript">
 function validate_form()
{
	
	if (document.formaa.name.value=="")
	{
		alert("Please enter your name");
		document.formaa.name.focus();
		return false;
	}
	
	if (document.formaa.email.value=="")
	{
		alert("Please enter your valid email address");
		document.formaa.email.focus();
		return false;
	}
	
	if (document.formaa.password3.value=="")
	{
		alert("Please Enter a Valid Password");
		document.formaa.password3.focus();
		return false;
	}

	if ((document.formaa.password3.value)!=(document.formaa.password2.value))
	{
		alert("The passwords entered by you do not match. Please check the passwords entered by you.");
		document.formaa.password3.focus();
		return false;
	}

	
}
</script>
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Register for BSutra</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="formaa" onSubmit="return validate_form(this);" method="post" action="register2.php">
                  <p><br></p>
                  <table width="80%" border="0" cellspacing="0" cellpadding="5">
                    <!--DWLayoutTable-->
                    <tr class="black_text_big">
                      <td height="22" colspan="2" valign="top" class="black_text">Details marked with a <span class="warning">*</span> are mandatory.</td>
                      </tr>
                    
                    <tr class="black_text">
                      <td height="22" valign="top">Name<span class="warning">*</span> </td>
                      <td><input name="name" type="text"  class="black_text" id="name" size="25" maxlength="255"></td>
                    </tr>
                    
                    <tr class="black_text">
                      <td height="22" valign="top">Email(Username)<span class="warning">*</span> </td>
                      <td><input name="email" type="text"  class="black_text" id="email" size="25" maxlength="255"></td>
                    </tr>
                    
                    <tr class="black_text">
                      <td height="22" valign="top">Password<span class="warning">*</span> </td>
                      <td><input name="password3" type="password" class="black_text" id="password3" size="25" maxlength="255"></td>
                    </tr>
                    
                    <tr class="black_text">
                      <td height="22" valign="top">Retype Password<span class="warning">*</span> </td>
                      <td><input name="password2" type="password"  class="black_text"  id="password2" size="25" maxlength="255"></td>
                    </tr>
                    
        
                    
                    <tr>
                           <td colspan="2" ><br><img src="CaptchaSecurityImages.php" /><br>
                             <span class="black_text">Please enter the letters shown above</span><span class="warning">*</span>
                             <input name="security_code" type="text" class="black_text" id="security_code" /></td>
                      </tr>
                    
                    
                    
                    <tr class="black_text">
                      <td height="22" valign="top"><label>
                        <input name="Submit" type="submit" class="black_text" value="Register">
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                </form>                  <p>&nbsp;</p>                  </td>
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