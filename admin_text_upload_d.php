<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"];  
  $tval = $_SESSION["type_file"];
  if($tval=='a')
   $tval="Audio";
  else $tval="Text/Image"; 
  $ival = $_SESSION["module"];

  $ip = $_SESSION["ip"];
  $nval = $_SESSION["name"];
 
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Step 2 : Uploading to Downloads</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
               <p>&nbsp;</p>
                  <table width="80%" border="0" cellspacing="0" cellpadding="5">
               <tr class="black_text">
                      <td height="22" >
              <? 

include("db.php");
if (($_FILES["file"]["size"] < 10000000)) //10mb max size
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
	
	$savename=$_FILES["file"]["name"];
	$typvar=$_FILES["file"]["type"];
	$sizevar=($_FILES["file"]["size"] / 1024) . ' '.'Kb';
	$_FILES["file"]["name"]=str_replace(" ","_",$savename);
	$savename=$_FILES["file"]["name"];
	echo "<table width=\"300\" class=\"black_text\" border=\"0\" cellspacing=\"5\" cellpadding=\"5\">
  <tr>
    <td>Filename</td>
	<td>:</td>
    <td><span class=\"blue_text_small\">" . $_FILES["file"]["name"] . "</span><br /></td>
    
  </tr>
  <tr>
    <td>Type</td>
	<td>:</td>
    <td><span class=\"blue_text_small\">" . $_FILES["file"]["type"] . "</span><br /></td>
  
  </tr>
  <tr>
    <td>Size</td>
	<td>:</td>
    <td><span class=\"blue_text_small\">" . ($_FILES["file"]["size"] / 1024) . " Kb</span><br /></td>
   
  </tr>
</table>";
	


    if (file_exists("sdaolnwod/" . $_FILES["file"]["name"]))
      {
      echo "<br /><br /><span class=\"warning_red\">".$_FILES["file"]["name"] . " already exists. Please select a different file.<br /><br /></span>";
	  ?>
 <table width="80%" border="0" cellspacing="0" cellpadding="5">
 <form action="admin_text_upload_d.php" method="post"
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
      </table> 
  
     <?   
     
      }
    else
      {
      if(move_uploaded_file($_FILES["file"]["tmp_name"],"./sdaolnwod/" . $_FILES["file"]["name"]))
	  {
	  $link="http://www.bsutra.com/sdaolnwod/" . $_FILES["file"]["name"];
      echo "<br /><br />Here's the download link : <a href=$link><span class=\"blue_text_small\">Download ". $_FILES["file"]["name"] . "</a>";
	  			
					
$sql="insert into z_downloads (name,link,type,category,uploaded_by,ip_addr,filen,filetyp,filesz,status)
VALUES ('$nval','$link','$tval','$ival','$user','$ip','$savename','$typvar','$sizevar','1')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  echo ("<p class=\"text_green\">File has been succesfully uploaded.</p>");
  echo ("<p>Click <a href=\"admin_dashboard.php\"><span class=\"blue_text_big\">here</span></a> to return to the dashboard.</p>");
mysql_close($con);
}
else 
{
  echo "<span class=\"warning_red\">Invalid file.<br/> There was some error in uploading the file. Please check the file type and size.<br />Please note that you can upload files of upto 10mb.";
  echo "<p>Please Try again</p></span>";
  }
      }
    }
  }
else
  {
  echo "<span class=\"warning_red\">Invalid file.<br/> There was some error in uploading the file. Please check the file type and size.<br />Please note that you can upload files of upto 10mb.";
  echo "<p>Please Try again</p></span>";
  }
  ?>               </td>
                        </tr>
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
		<? 
			include("foot.html");?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>