<?php
 session_start();
 if(!isset($_SESSION["username"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"user.php\">Login Page</a>";
		exit();
  }  
$user = $_SESSION["username"]; 

$_SESSION["type_file"] = $_POST["typ"];
  $tval = $_SESSION["type_file"];
$_SESSION["name"] = $_POST["name"];
  $nval = $_SESSION["name"];

$_SESSION["module"] = $_POST["module"];
  $ival = $_SESSION["module"];

$_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];
  $ip = $_SESSION["ip"];

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
      <td height="142" valign="top" background="images/design_01.jpg"><?php 
			include("top.php");
		?></td>
  </tr>
	<tr>
      <td height="23" align="center" valign="top" background="images/design_03.jpg"><?php 
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Step 2 : Uploading to Downloads </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
               
               
               
                  <p>&nbsp;</p>
                  <table width="80%" border="0" cellspacing="0" cellpadding="5">
                
     <?php // now check which type did the user select.
     if($tval=='v')
	  { ?>
      <form name="form111" method="post" action="user_video_success_d.php">
	  					
                        <tr class="black_text">
                      <td height="22" colspan="2" >
                      <p>Enter the YouTube link for the video that you wish to upload in the Downloads section.</p>
                      <p>For example : <i>http://www.youtube.com/watch?v=aORhbphEunY</i></p></td>
                        </tr>
                        
                        <tr class="black_text">
                      <td width="296" height="22" >
                      Enter the YouTube Video Link</td>
                      <td width="406"><input name="youtube_link" type="text" class="black_text" value="http://" size="45">                      </td>
                    </tr>
	  
	  <tr class="black_text">
                      <td height="22">&nbsp;</td>
                      <td height="22" valign="top"><br /><label>
                        <input name="Submit" type="submit" class="black_text" value="Submit">
                      </label></td>
                    </tr> </form>            
	  <? }
     else 
	 {
	 ?>
     <form action="user_text_upload_d.php" method="post"
enctype="multipart/form-data">
	   					<tr class="black_text">
                      <td height="22" colspan="2" >
                      <p>You can only upload files of upto 10mb. Click on Browse to select file that you wish to upload.</p>
                        <p>
If there are more than one files to be uploaded then please make a zip file and upload it.</p><br /></td>
                        </tr>
                    
    			<tr class="black_text">
                      <td width="296" height="22" >
                    <label for="file" >Select File :</label></td>
                      <td width="406"><input name="file" type="file" class="black_text" id="file" size="40" /> 
						<br />                      </td>
                    </tr>
      			<tr class="black_text">
                      <td height="22">&nbsp;</td>
                      <td height="22" valign="top"><br /><label>
                         <input name="submit" type="submit" class="black_text" value="Submit File" />
                      </label></td>
                    </tr> 		
     </form> 
     
	 <?php
	 }               
                    
       ?>
      </table>
      <p></p>   			 </td>
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