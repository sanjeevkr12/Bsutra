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
<form name="formaa" onSubmit="return validate_form(this);" method="post" action="register2.php">
  <table width="100%" border="0" align="left" cellpadding="5" cellspacing="0">
    <!--DWLayoutTable-->
    <tr class="black_text_big">
      <td height="22" colspan="2" valign="top" class="black_text">Details marked with a <span class="warning">*</span> are mandatory.</td>
    </tr>
    <tr class="black_text">
      <td width="271" height="22" valign="top">Name<span class="warning">*</span> </td>
      <td width="146"><input name="name" type="text"  class="black_text" id="name" size="25" maxlength="255"></td>
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
      <td colspan="2" ><br>
          <img src="CaptchaSecurityImages.php" alt="." /><br>
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
</form>
<!-- End ImageReady Slices -->
</body>
</html>