<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="bsutra.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1400" border="0" style="overflow: auto;" cellpadding="5" cellspacing="0" class="black_text">
                    <thead>
                      <tr align="left" valign="middle">
                        <th width="800"><strong>Institute Name </strong></th>
                        <th width="400"><strong>About the Institute </strong></th>
                        <th width="10%"><strong>Percentile Required</strong> </th>
                        <th width="10%"><strong>Rank</strong></th>
                        <th width="10%">&nbsp;</th>
                      </tr>
                    </thead>
                    <?
				  	include("db.php");
					$query = "select id,name,des,percentile,rank from z_profile order by rank limit 0,15";
					$dbresult = mysql_query($query);
					
					while($row= mysql_fetch_row($dbresult))
					{
						if(strlen($row[2]) > 75)
						{
							$dot = "...";
							$row[2] = substr($row[2],0,72);
							$row[2] = $row[2].$dot;
						}
						
						echo " <tr>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>More Info</td>
                  </tr>";
					}
				  ?>
                  </table>
</body>
</html>
