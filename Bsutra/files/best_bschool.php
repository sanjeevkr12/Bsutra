<?
session_start();
?><html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">


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
      <td height="142" valign="top" background="images/design_01.jpg"><? 
			include("top.php");
		?></td>
  </tr>
	<tr>
		<td width="100%" height="47" align="left" valign="top" background="images/design_03.jpg"><? 
			include("menu.php");
		?></td>
	</tr>
	<tr>
		<td align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Best BSchool for me</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="100%" border="0" cellpadding="5" cellspacing="0" class="black_text" id="rank">
				<thead>
                  <tr>
                    <th width="50" align="left" bgcolor="#587681"><span class="style1">Rank</span></th>
                    <th align="left" bgcolor="#587681"><span class="style1">Institute</span> </th>
					<th width="100" align="left" bgcolor="#587681"><span class="style1">CAT Cutoff Percentile</span></th>
                  </tr>
				  </thead>
				  
				  <?
				  
				  	$state = $_GET['state'];
					$fees = $_GET['fees'];
					$percentile =$_GET['percentile'];
					$count = $_GET['count'];
					
					if($state == "All States")
						$state_query = "where state IN ('','Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Delhi','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Orissa','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttarakhand','Uttar Pradesh','West Bengal','Chandigarh','Andaman and Nicobar','Laksadweep','Dadar and Nagar Haweli','Pondicherryi','Daman and Diu') ";
					else
						$state_query = " where state = '$state'";
					
					
					if($fees == 0)
						$fees_query = "";
					else if($fees == 13)
						$fees_query = " && fees > ($fees-1) ";
					else
						$fees_query = " && fees >= ($fees-1) && fees < $fees ";
					
					
					
					$per_query = " && percentile < $percentile  ";
					
								
				  	include("db.php");
					/*This query is to find the total number of rows in the search domain */
					$query = "select id,name,rank,percentile from z_profile $state_query $fees_query $per_query order by rank";
					$dbresult = mysql_query($query);
					$num = mysql_num_rows($dbresult);
					$num = $num / 10;
					
					
					$query = "select id,name,rank,percentile from z_profile $state_query $fees_query $per_query order by rank LIMIT $count,10";
					$dbresult = mysql_query($query);
					
					
					while($row = mysql_fetch_row($dbresult))
					{
						echo "<tr onMouseOver=\"this.style.backgroundColor='#EBEBEB';\" onMouseOut=\"this.style.backgroundColor='#ECF7FD'\" >
                    		  <td><a href=\"show_school.php?s=$row[0]\">$row[2]</a></td>
                   			 <td><a href=\"show_school.php?s=$row[0]\"><u>$row[1]</u></a></td>
							 <td>$row[3]</td>
							
                			  </tr>";
					}
				  ?>
                  
				  
				  <tr>
                    <th colspan="3" align="left" bgcolor="#587681" class="style1">
					
					<?
					for ($i=1;$i<=$num;$i++)
						echo "<a href=\"best_bschool.php?count=". ($i-1)*10 ."&state=$state&fees=$fees&percentile=$percentile\"><span class=\"style1\"> $i | </span></a>";	
					?>
					
					</th>
                    </tr>
				  
				  
                </table>                               </td>
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