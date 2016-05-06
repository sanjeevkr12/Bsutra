<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="10"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">List of Deadlines/Important Dates| <span class="black_text">
                   <a href="admin_dashboard.php">
                   <input name="button" type="button" class="black_text" 
 value="Back to Dashboard"></a>
                </span></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
				<?
				//date_default_timezone_set("Asia/Kolkata");

				$today = date("Y-m-d");	
				?>
				  <p>
				    <span class="blue_text_big"><strong>NOTE : This list shows deadlines/Important Dates on or after 
					
					<?
					$mm = $today[5].$today[6];
							$dd = $today[8].$today[9];
							$yy = $today[0].$today[1].$today[2].$today[3];
							
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

echo "$dd $month $yy";

					?></strong></span><br>
				    <br>
				    <br>
				    <?
					include("db.php");
					
					$query = "select id,name,deadline,insti from z_deadline where deadline >= '$today' order by deadline";
					$dbresult = mysql_query($query);
					if(mysql_num_rows($dbresult) < 1)
						echo "<script language=\"javascript\">alert(\"No Deadlines exists in Database that can be edited at the moment\");location.href=\"admin_dashboard.php\";</script>";

						
						
					echo "<ul>";
					while($row=mysql_fetch_row($dbresult))
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

$query1 = "select name from z_profile where id='$row[3]'";
$dbresult1 = mysql_query($query1);
$row1 = mysql_fetch_row($dbresult1);

						echo "<li><a href=\"admin_edit_deadline1.php?s=$row[0]&n=$row[1]&e=$row1[0]\"><strong>$row1[0]</strong> - $row[1] <br> $dd $month $yy</a><br><br></li>";
					}
					echo "</ul>";
				?>
			      </p>				  </td>
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