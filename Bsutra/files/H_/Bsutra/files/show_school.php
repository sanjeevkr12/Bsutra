<?
session_start();
?><html>
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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
				
				<?
				$id = $_GET['s'];
				include("db.php");
				$query = "select * from z_profile where id = '$id'";
				$dbresult = mysql_query($query);
				$row = mysql_fetch_row($dbresult);
				?>
				
                <td width="100%" background="images/top_mid.jpg" class="menu"><? echo $row[1]; ?> </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Rank</strong></td>
                    <td align="left" valign="top"><? echo $row[3]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Grade</strong></td>
                    <td align="left" valign="top"><? echo $row[13]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Entrance Exam </strong></td>
                    <td align="left" valign="top"><? echo $row[14]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Cut-off Percentile</strong></td>
                    <td align="left" valign="top"><? echo $row[6]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Course Fees </strong></td>
                    <td align="left" valign="top"><? echo $row[5]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Forms Available At </strong></td>
                    <td align="left" valign="top"><? echo $row[19]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Median Salary </strong></td>
                    <td align="left" valign="top"><? echo $row[10]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Female-Male Ratio </strong></td>
                    <td align="left" valign="top"><? echo $row[11]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Daily Contact Hours </strong></td>
                    <td align="left" valign="top"><? echo $row[16]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Major Events</strong></td>
                    <td align="left" valign="top"><? echo $row[15]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Faculty</strong></td>
                    <td align="left" valign="top"><? echo $row[19]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Student Strength </strong></td>
                    <td align="left" valign="top"><? echo $row[18]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>AICTE Approved </strong></td>
                    <td align="left" valign="top"><? echo $row[17]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>State - City </strong></td>
                    <td align="left" valign="top"><? echo $row[2]." - ".$row[12]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>About the Institute </strong></td>
                    <td align="left" valign="top"><? echo $row[4]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Website</strong></td>
                    <td align="left" valign="top"><a href="<? echo $row[22]; ?>"><? echo $row[21]; ?></a></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Other Info </strong></td>
                    <td align="left" valign="top"><? echo $row[7]; ?></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Bsutra Forum Link for <? echo $row[1]; ?> </strong></td>
                    <td align="left" valign="top"><a href="<? echo $row[8]; ?>"><? echo $row[8]; ?></a></td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top"><strong>Enquire from Institute by Email </strong></td>
                    <td align="left" valign="top">
                    
                    <? if($_GET[m]!='1')
					{
					?>
                    <form name="form198" method="post" action="show_school.php?s=15&m=1">
                 
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
                      <td>Enquiry</td>
                      <td><label>
                        <textarea name="enquiry" cols="37" rows="5" class="black_text" id="enquiry"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <input name="Submit" type="submit" class="black_text" value="Send Query">
                      </label></td>
                      </tr>
                  </table>
                  
                </form>           
                    <? }
					
					if($_GET[m]=='1')
					{
					
					$email = $row[9];

$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: BSutra - Enquiry about your institute !<no-reply@bsutra.com>';

// The subject
$subject = "Enquiry Regarding Your Institute";
// The message
$message = $_POST[enquiry];
$message.= "<br><br>_________________________<br><br>Sent By : <br><br>";
$message = $message . $_POST[name];
$message = $message . "<br>";
$message = $message . $_POST[email];
mail($email, $subject, $message, $headers);

echo "<br><b><font color=\"green\">Your query has been sent.</font></b>";
}
					?>
                    </td>
                  </tr>
                  <tr>
                    <td width="200" align="left" valign="top">&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                  </tr>
                </table>
				
                <p>
				
				
				<a name="deadline"></a>
				<?
					$query = "select name,comment,deadline from z_deadline where insti='$id'";
					$dbresult = mysql_query($query);
					
					if(mysql_num_rows($dbresult) > 0)
					{
						echo "<table width=\"98%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black_text\">
                      <tr>
                        <td bgcolor=\"#E0EDF3\" class=\"blue_text_big\"><strong>Important Dates/Deadlines</strong></td>
                      </tr>";
					  
					  while($row = mysql_fetch_row($dbresult))
					  {
					  		$mm = $row[2][5].$row[2][6];
							$dd = $row[2][8].$row[2][9];
							$yy = $row[2][0].$row[2][1].$row[2][2].$row[2][3];
							
								switch($mm)
{
	case 1: $month = "January";break;
	case 2: $month = "February";break;
	case 3: $month = "March";break;
	case 4: $month = "April";break;
	case 5: $month = "May";break;
	case 6: $month = "June";break;
	case 7: $month = "July";break;
	case 8: $month = "August";break;
	case 9: $month = "September";break;
	case 10: $month = "October";break;
	case 11: $month = "November";break;
	case 12: $month = "December";break;
};


							echo "<tr>
                        <td><strong>$row[0] - $dd $month $yy</strong><br></td>
                      </tr>
					  <tr>
					  	<td>$row[1]<hr></td>
					  </tr>
                      ";
					  }
					  echo "</table>";
						
					} 
                    
					  
					  ?>
					  </p></td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td background="images/bottom_mid.jpg">&nbsp;</td>
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