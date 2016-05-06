<?php
 session_start();
 if(!isset($_SESSION["username"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"user.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["username"]; 
  $tval = $_SESSION["type_file"];
  $ival = $_SESSION["module"];
  if($ival==0)
	$ival=="For B-School Aspirants";
  else $ival=="For B-School Students";
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Step 2 : Uploading to Downloads </td>
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
	
	$lval=	$_POST["youtube_link"];		
					
					if($tval=='v')
					 $tval="Video";
					
$sql="insert into z_downloads (name,link,type,category,uploaded_by,ip_addr,filen,filetyp,filesz) values ('$nval','$lval','$tval','$ival','$user','$ip','YouTube Video/FLV','Youtube Video','Online Video');";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  $new = "";
	$i=0;
	while($lval[$i] != "=")
	 { $i++; }
	 $i++;
while( ($lval[$i] != "&") && ($lval[$i] != ""))
{
       $new .= $lval[$i];
       $i++;        
     
}

  
  echo ("<p class=\"text_green\">Video has been succesfully added.</p>");
  echo ("<p class=\"warning_red\">The video has been sent to the administrator for approval. Once approved it will show up in the downloads section.</p>");
  echo ("<p>Click <a href=\"user_dashboard.php\"><span class=\"blue_text_small\">here</span></a> to return to the dashboard.</p>");
  echo ("<p>
  
  <object width=\"425\" height=\"344\"><param name=\"movie\" value=\"http://www.youtube.com/v/" . $new . "&hl=en&fs=1&rel=0\"></param><param name=\"allowFullScreen\" value=\"true\"></param><param name=\"allowscriptaccess\" value=\"always\"></param><embed src=\"http://www.youtube.com/v/" . $new . "&hl=en&fs=1&rel=0\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"425\" height=\"344\"></embed></object>
  </p>");
  
mysql_close($con);
               
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
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>