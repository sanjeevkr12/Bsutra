<?php
 session_start();
 if(!isset($_SESSION["username"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"user.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["username"]; 
?>
<html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
 function validate_form()
{
	
	if (document.form1.module.value=="2")
	{
		alert("Please select the module in which you wish to upload");
		document.form1.module.focus();
		return false;
	}
	
	
}
</script>
</head>
<body bgcolor="#FFFFFF">
<!-- ImageReady Slices (design.psd) -->
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="Table_01"><!--DWLayoutTable-->
	<tr>
      <td height="142" valign="top" background="images/design_01.jpg"><? 
			include("top_user.php");
		?></td>
  </tr>
	<tr>
		<td width="100%" height="47" align="left" valign="top" background="images/design_03.jpg"><? 
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Upload Files in Downloads | <span class="black_text">
                  <input name="button" type="button" class="black_text" 
onClick="javascript: history.go(-1)" value="Back to Dashboard">
                </span></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">     
                
                
                <table width="66%" border="0" cellspacing="5" cellpadding="5">
                <form name="form1" method="post" onSubmit="return validate_form(this);" action="user_checktype_d.php">
                   <tr class="black_text">
                      <td height="22" colspan="4" valign="top"><p>&nbsp;</p>
                        </td>
                    </tr>
                    
                     <tr class="black_text">
                      <td height="22" colspan="4" valign="top"><p><br />
                      Select a type from <span class="blue_text_big">'Audio'</span>, <span class="blue_text_big">'Video'</span> or <span class="blue_text_big">'Text/Image'</span>.
                     <br />
                     <br /> 
                     Videos files have to be uploaded on <a href="http://www.youtube.com">YouTube.com</a> and can be embedded here.<br />
                     <br />
                     Audio files can be 'mp3' or 'wav' <br /><br />
                     Text files can be of any of the document files, zip/rar archives or any kind of images.
                        <span class="warning_red"><br><br>Once you have uploaded the files, they will be sent to the Administrator for the approval.</span><br><br></p>
                      </td>
                    </tr>
                    <tr class="black_text">
                      <td width="253" height="22" >
                      Select module where you wish to upload</td>
                      <td colspan="3"><label>
                        <select name="module" class="black_text" id="module">
                          <option value="2" selected>Select Module</option>
                          <option value="0">For B-School Aspirants</option>
                          <option value="1">For B-School Students</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td width="253" height="22" >Select type of upload </td>
                      <td width="69"><label><input name="typ" type="radio" value="a"></label>Audio </td>
                      <td width="81"><label><input name="typ" type="radio" value="v">
                      </label>Video</td>
                      <td width="134"><label><input name="typ" type="radio" value="t" checked>
                      </label>
                        Text/Image</td>
                    </tr>
                   
                    <tr class="black_text">
                      <td width="253" height="22" valign="top"> </td>
                      <td colspan="3">
                        (Select one of the file types)
                    </td>
                    </tr>
                    
                    
                <tr class="black_text">
                      <td width="253" height="22" >
                      Enter Title/Name for the Upload:</td>
                      <td colspan="3"><input name="name" type="text" class="black_text" size="40">
                      </td>
                    </tr>        
         <tr class="black_text">
                      <td width="253" height="22" valign="top">Uploaded By </td>
                      <td colspan="3"><? echo $user; ?></td>
                    </tr>           
           <tr class="black_text">
                      <td width="253" height="22" valign="top">Your IP Address</td>
                      <td colspan="3"><? echo $ip=$_SERVER['REMOTE_ADDR']; ?> </td>
                    </tr>
                    
                    
                    <tr class="black_text">
                      <td height="22" valign="top"></td>
                      <td colspan="3"><label>
                        <input name="Submit" type="submit" class="black_text" value="Proceed to Step 2">
                      </label></td>
                    </tr></form>
                  </table>
                
                
                
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
		<? 
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>