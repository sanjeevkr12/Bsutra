<?
session_start();
?><html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">

	
<script type="text/javascript">	
	function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}
	
	
	
function validate_feedback_form()
{
		
	if (document.form_feedback.name.value==""){
		alert("Please Enter your Name")
		document.form_feedback.name.focus()
		return false
	}
	if (echeck(document.form_feedback.email.value)==false){
		document.form_feedback.email.value=""
		document.form_feedback.email.focus()
		return false
	}

	if (document.form_feedback.feedback.value=="")
	{
		alert("Please enter your feedback");
		document.form_feedback.feedback.focus();
		return false;
	}
	
	
return true;
}
</script>


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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Feedback</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form_feedback"  onSubmit="return validate_feedback_form(this);" method="post" action="feedback_mail.php">
                  <p>&nbsp;</p>
                  <table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                    <tr>
                      <td width="18%">Your Name </td>
                      <td width="82%"><label>
                        <input name="name" type="text" class="black_text" id="name" size="40" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td>Your Email Address </td>
                      <td><input name="email" type="text" class="black_text" id="email" size="40" maxlength="255"></td>
                    </tr>
                    <tr>
                      <td>Feedback/Comment</td>
                      <td><label>
                        <textarea name="feedback" cols="37" rows="5" class="black_text" id="feedback"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <input name="Submit" type="submit" class="black_text" value="Send Feedback">
                      </label></td>
                      </tr>
                  </table>
                  <p>&nbsp;</p>
                </form>                </td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td align="right" background="images/bottom_mid.jpg" class="black_text"><a href="contact.php">For more queries/questions contact us</a> </td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>               </td>
            <td width="305" rowspan="2" align="right" valign="top"><? 
			include("sidebar.php");
		?></td>
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