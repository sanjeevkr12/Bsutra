<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Approve Files in Downloads <input name="button" type="button" class="black_text" 
onClick="javascript: history.go(-1)" value="Back to Dashboard"></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                 <p>
                   <?
						  $val=$_GET['id'];	?>
                   <br>
                   Are you sure you want to approved this file ?<br>
                   <br>
                  Files which are approved are displayed in the Downloads Section.</p>
                 
                 <table width="150" border="0" cellspacing="5" cellpadding="5">
                  <tr>
                    <td valign="top"><form  action="admin_approve_file_2_d.php?id=<? echo $val; ?>"  method="post">
                  <input name="button2" type="submit" class="black_text"  value="Yes">
                </form></td>
                    <td  valign="top"><input name="button" type="button" class="black_text" 
onClick="javascript: history.go(-1)" value="No"></td>
                  </tr>
                </table>
                
                
                
                
        <?
		
		
						include("db.php");	
						$vals=$_GET['id'];					
						$query = "select * from z_downloads where id='$vals'";
						$dbresult = mysql_query($query);
						$row = mysql_fetch_row($dbresult);
						if($row[4]=='0')
						 $str="For B-School Aspirants";
						else $str="For B-School Students"; 
						echo "<table class=\"black_text\" border=\"0\" cellspacing=\"5\" cellpadding=\"5\">";
							
		if($row[3]=='Audio' || $row[3]=='Text/Image')					
		{
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Name</strong></td>
				<td>:</td>
				<td>$row[1]</td></tr>";		
 	    echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Type</strong></td>
				<td>:</td>
				<td>$row[3]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Module</strong></td>
				<td>:</td>
				<td>$str</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Uploaded By</strong></td>
				<td>:</td>
				<td>$row[5]</td></tr>";	
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Filename</strong></td>
				<td>:</td>
				<td>$row[7]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Filetype</strong></td>
				<td>:</td>
				<td>$row[8]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Filesize</strong></td>
				<td>:</td>
				<td>$row[9]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Status</strong></td>
				<td>:</td>
				<td>"; ?>
			<?	
				if($row[10]=='1') { echo "<span class=\"text_green\">Approved</span>"; }
				else { echo "<span class=\"warning_red\">Not Approved</span>"; }
			?> 
				
			<? echo "</td></tr>";				
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Download</strong></td>
				<td>:</td>
				<td><a href=\"$row[2]\"><span class=\"blue_text_small\">$row[2]</span></a></td></tr>";										
		}
	else
	{
	echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Name</strong></td>
				<td>:</td>
				<td>$row[1]</td></tr>";		
 	    echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Type</strong></td>
				<td>:</td>
				<td>$row[3]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Module</strong></td>
				<td>:</td>
				<td>$str</td></tr>";	
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Uploaded By</strong></td>
				<td>:</td>
				<td>$row[5]</td></tr>";	
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Filename</strong></td>
				<td>:</td>
				<td>$row[7]</td></tr>";
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Status</strong></td>
				<td>:</td>
				<td>"; ?>
			<?	
				if($row[10]=='1') { echo "<span class=\"text_green\">Approved</span>"; }
				else { echo "<span class=\"warning_red\">Not Approved</span>"; }
			?> 
				
			<? echo "</td></tr>";			
		echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Youtube Link</strong></td>
				<td>:</td>
				<td><a class=\"blue_text_small\" href=\"$row[2]\"><span class=\"blue_text_small\">$row[2]</span></a></td></tr>";		
		
	//special code for embedding videos
	$lval=$row[2];
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
	echo "<tr><td bgcolor=\"#587681\" class=\"warning\"><strong>Snapshot</strong></td><td>:</td><td>";
		echo ("<p><object width=\"425\" height=\"344\"><param name=\"movie\" value=\"http://www.youtube.com/v/" . $new . "&hl=en&fs=1\"></param><param name=\"allowFullScreen\" value=\"true\"></param><param name=\"allowscriptaccess\" value=\"always\"></param><embed src=\"http://www.youtube.com/v/" . $new . "&hl=en&fs=1\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"425\" height=\"344\"></embed></object>
  </p></td></tr>");
		
	
	}	
 
	echo "</table>";
		?>
		
                
                
                <p>&nbsp;</p>                  </td>
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