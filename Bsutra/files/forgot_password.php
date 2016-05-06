<?php
$show=1;
$error=0;
$done=0;
if(isset($_GET['ref']))
{
	if($_GET['ref']=="submit")
	{
	//form submitted
	//now check post variables
	
			if($_POST['username'])
			{
			
			
			    include("db.php");
				$sql="select * from z_user where email='" . $_POST["username"] . "'";
				$user=$_POST["username"];
				$result=mysql_query($sql);
				
				if(mysql_num_rows($result) > 0)
  				{
						//match found info entered is correct
						$row = mysql_fetch_row($result);
						$username=md5($user);
						$newpass=substr($username,0,7);//send to the user
						$newpass_en=md5("$newpass");
						//this is the new password
						$query = "update z_user set password='$newpass_en' where email='$user'";
						$dbresult = mysql_query($query);
						$name = $row[1];
						if(!$dbresult)
						{
							$error=1;
							$show=1;
						}
						 else
						 {
							//done now display the success message.
							
							$to = $user;
							$subject = "Change Password Request";
							$message = "Hello $name \n\n We received a 'change password' request from you and your password has been reset. Your new passowrd is : \n\n\t\t $newpass \n\nPlease change your password, once you have logged in. \n\n\nThanks\nDare2Compete.com";
							$from = "Bsutra";
							$headers = "From: $from";
							mail($to,$subject,$message,$headers);
							
							//sent email
							//set the variable
							$show=0; // dont show the form
							//show success message
							$done=1;
							
						 }
				}	//end of IF of match found !!!!
				else
				{ 
					$show=1;
					$error=1; 
				}	
							
			}	//kya username post hua tha..... uska IF hai yeh
			else $error=1;
    }
		
	else 
	{
	$error=0;
	echo "<script language=\"javascript\">
	location.href=\"forgot_password.php\";
	</script>";
	
	}
}	
?>



<html>
<head>
<title>BSutra |Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>



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

function validate_forgot_form()
{
	
	var emailID=document.form_forgot.username
	
	if (document.form_forgot.username.value==""){
		alert("Please Enter your Email ID")
		document.form_forgot.username.focus()
		return false
	}
	if (echeck(document.form_forgot.username.value)==false){
		document.form_forgot.username.value=""
		document.form_forgot.username.focus()
		alert("Please Enter correct Email ID")
		return false
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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="10"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Forgot Password </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td align="left" valign="top" bgcolor="#ECF7FD"><?php   if($show==1)
{
?>
  <div class="content_box">
                        <form name="form_forgot" method="post" onSubmit="return validate_forgot_form(this);" action="forgot_password.php?ref=submit">
                          <table width="470" border="0" cellpadding="5" cellspacing="5">
                            <?php if($error==1) {?>
                            <tr>
                              <td colspan="2" align="left" bgcolor="#CC3300" class="white"><div align="center" class="warning style1">
                                <div align="left">Invalid Email Id. Please try again.</div>
                              </div></td>
                            </tr>
                            <?php } 
else if($error==0) {?>
                            <tr>
                              <td colspan="2" class="white"><div align="center" class="blue_text_big">
                                <div align="left"><strong>Please enter your details to receive the new password.</strong></div>
                              </div></td>
                            </tr>
                            <?php } ?>
                            <tr>
                              <td  colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="black_text">Enter Your Email Address : (Username)</td>
                              <td><label>
                                <input name="username" type="text" class="black_text" id="username">
                              </label></td>
                            </tr>

                            <tr>
                              <td></td>
                              <td><p>
                                  <label>
                                  <input name="Sumbit" type="submit" class="formbig" id="Sumbit" value="Submit">
                                  </label>
                                  <label>
                                  <input name="Reset" type="reset" class="formbig" id="button" value="Reset">
                                  </label>
                              </p></td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                        </form>
                  </div>
                    <?php } 
 if($done==1)   
 {
 ?>
                      <div class="content_box">
                        <table width="400" border="0" cellpadding="5" cellspacing="5">
                          <tr>
                            <td class="black_text">Your new password has been sent to the <span class="black_text"><?php echo $user; ?></span>.
                              <p>Please change your password, after logging in with the new password.</p></td>
                          </tr>
                          <td class="black_text"><p>Please click <a class="blue_link" href="index.php">here</a> to go back to the homepage.</p></td>
                          </tr>
                        </table>
                      </div>
                    <?php
 }
 ?>
                </td><td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td background="images/bottom_mid.jpg">&nbsp;</td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>              
            <p>&nbsp;</p>            </td>
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