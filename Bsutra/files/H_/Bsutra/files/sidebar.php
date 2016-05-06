<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="bsutra.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978" align="left" valign="top"><table width="305" border="0" align="left" cellpadding="15" cellspacing="0">
        <tr>
          <td height="83" background="images/box_1.jpg" class="menu">Our Sponsors </td>
        </tr>
        <tr>
          <td width="305" background="images/box_2.jpg" class="black_text">Put all the sidebar content in here </td>
        </tr>
        <tr>
          <td width="305" height="78" style="background:url(images/box_3.jpg); background-repeat:no-repeat">&nbsp;</td>
        </tr>
      </table>
    <br /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="305" border="0" cellspacing="0" cellpadding="15">
        <tr>
          <td height="83" background="images/box_1.jpg" class="menu">Important Dates  </td>
        </tr>
        <tr>
          <td width="305" background="images/box_2.jpg" class="black_text"><table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text" id="rank">
            <thead>
              <tr>          
                <th width="60%" align="left">Event </th>
                <th width="40%" align="left">Deadline</th>
              </tr>
            </thead>
            <?
				  	include("db.php");
					
					$today = date("Y-m-d");
					$end = date("Y-m-d",mktime(0, 0, 0, date("m")  , date("d")+90, date("Y")));
					
					
					$query = "select id,name,deadline from z_deadline where deadline >= '$today' && deadline < '$end' order by deadline";
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
                    		 
                   			 <td>$row[1]</td>
							 <td>$dd $month $yy</td>
                			  </tr>";
					}
				  ?>
          </table></td>
        </tr>
        <tr>
          <td width="305" height="78" align="right" background="images/box_3.jpg"><strong><a class="bigblue" href="deadline.php"><span class="blue_text_big">Show all Important Dates </span></a></strong></td>
        </tr>
      </table>
        <p>&nbsp;</p></td>
  </tr>
  <!--DWLayoutTable-->
</table>
</body>
</html>
