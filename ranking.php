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
var TSort_Data = new Array ('rank', 'i', 's','s');
tsRegister();

// -->
</script>


<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Top 50 B-Schools</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="99%" border="0" cellpadding="5" cellspacing="0" class="black_text">
				<thead>
                  <tr bgcolor="#587681">
                    <th width="10%" align="left"><span class="style1">Rank</span></th>
                    <th width="60%" align="left"><span class="style1">Institute</span> </th>
					<th width="30%" align="left"></th>
                  </tr>
				  </thead>
				  
				  <?php
				  	include("db.php");
					$query = "select id,name,rank,forum from z_profile where rank < 51 order by rank";
					$dbresult = mysql_query($query);
					
					while($row = mysql_fetch_row($dbresult))
					{
						echo "<tr>
                    		  <td>$row[2]</td>
                   			 <td><a href=\"show_school.php?s=$row[0]\"><u>$row[1]</u></a></td>
							 <td><a href=\"$row[3]\">Jump to Forum Thread</a></td>
                			  </tr>";
					}
				  ?>
                  
                </table>                               </td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td background="images/bottom_mid.jpg">&nbsp;</td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>               </td>
            <td width="305" rowspan="2" align="right" valign="top"><?php 
			include("sidebar.php");
		?></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="grade">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Grading of Top 50 B-Schools </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="100%" border="0" cellpadding="5" cellspacing="0" class="black_text" id="rank">
                    <thead>
                      <tr bgcolor="#587681">
                        <th width="10%" align="left"><span class="style1">Rank</span></th>
                        <th width="70%" align="left"><span class="style1">Institute</span> </th>
                        <th width="20" align="left" bgcolor="#587681"><span class="style1">Category</span></th>
                      </tr>
                    </thead>
                    <?php
				  	include("db.php");
					$query = "select id,name,rank,grade,forum from z_profile order by rank LIMIT 0,50";
					$dbresult = mysql_query($query);
					
					while($row = mysql_fetch_row($dbresult))
					{
						echo "<tr>
                    		  <td>$row[2]</td>
                   			 <td><a href=\"show_school.php?s=$row[0]\"><u>$row[1]</u></a></td>
							 <td>$row[3]</td>
                			  </tr>";
					}
				  ?>
                  </table>
                    <p>&nbsp;</p></td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td background="images/bottom_mid.jpg">&nbsp;</td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table></td>
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