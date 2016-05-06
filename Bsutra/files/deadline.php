<?
session_start();
?><html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="gs_sortable.js"></script>
<script type="text/javascript">
<!--
var TSort_Data = new Array ('rank', 's', '');
tsRegister();

// -->
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
            <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="grade">
                <!--DWLayoutTable-->
                <tr>
                  <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                  <td width="100%" background="images/top_mid.jpg" class="menu">Important Dates / Deadlines</td>
                  <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
                </tr>
                <tr>
                  <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                  <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="80%" border="0" cellpadding="5" cellspacing="0" class="black_text" id="rank">
                      <thead>
                        <tr>
                          <th width="36%" align="left">Institute</th>
                          <th width="32%" align="left">Event </th>
                          <th width="32%" align="left">Deadline</th>
                        </tr>
                      </thead>
                      <?
				  	include("db.php");
					
						$today = date("Y-m-d");
					
					
					
					$query = "select z_deadline.id,z_deadline.name,z_deadline.deadline,z_profile.name,z_deadline.insti from z_deadline,z_profile where z_deadline.insti=z_profile.id && z_deadline.deadline >= '$today' order by z_deadline.deadline";
					$dbresult = mysql_query($query);
					
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
                    		  <td><a href=\"show_school.php?s=$row[4]#deadline\" target=\"_blank\"><u>$row[3]</u></a></td>
                   			 <td>$row[1]</td>
							 <td>$dd $month $yy</td>
                			  </tr>";
					}
				  ?>
                    </table>
                      <p>&nbsp;</p></td>
                  <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
                </tr>
                <tr>
                  <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                  <td align="right" background="images/bottom_mid.jpg"><strong><a href="deadlines.php"></a></strong></td>
                  <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
                </tr>
            </table></td>
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