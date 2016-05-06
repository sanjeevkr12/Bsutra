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
      <td width="978" height="142" valign="top" background="images/design_01.jpg"><? 
			include("top.php");
		?></td>
  </tr>
	<tr>
		<td height="47" align="center" valign="top" background="images/design_03.jpg"><? 
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Advanced B-School Search </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28" rowspan="2" class="black_text"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
				
				<?
				include("db.php");
				$f1 = $_POST['f1'];
				$f2 = $_POST['f2'];
				$t1 = $_POST['t1'];
				$t2 = $_POST['t2'];
				
				
				if(($t1 == "") || ($t2 == ""))
					echo "<script language=\"javascript\">alert(\"Search Term Fields cannot be left blank. Please go back & enter a search term\");location.href=\"advanced_search.php\";</script>";
					
					
				$query = "";
				
				if($f1 == "Skip this field")
				{
						$query = "select id,$f2,name from z_profile where $f2 $t2 order by id";
						$f1 = $f2;	//this is bcoz we always display $f1 in single field search
						$f2 = "N.A.";
				}
				if($f2 == "Skip this field")
				{
					$f2 = "N.A.";
					$query = "select id,$f1,name from z_profile where $f1 like '%$t1%' order by id";
				}
				
				if($f1 == $f2)
				{
				echo "<script language=\"javascript\">alert(\"Please select atleast one of the search fields.\");location.href=\"advanced_search.php\";</script>";
				}
				
				if($query == "")
				{
					$query = "select id,$f1,$f2 from z_profile where $f1 like '%$t1%' && $f2 $t2 order by id";
					$flag = 1;
				}	
				$dbresult = mysql_query($query);
				
				//echo $query;
					
				
				if ($flag == 1)
					echo "<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">
                  <tr class=\"blue_text_big\">
                    <td><strong>$f1</strong></td>
                    <td><strong>$f2</strong></td>
                  </tr>
				  ";
				  
				 else
				 	echo "<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">
                  <tr class=\"blue_text_big\">
                    <td><strong>Institute Name</strong></td>
                    <td><strong>$f1</strong></td>
                  </tr>
				  ";
				  
				
				  if(mysql_num_rows($dbresult) > 0 )
				  {
				  	while($row = mysql_fetch_row($dbresult))
					{
						if ($flag == 1)
							echo "<tr class=\"black_text\" bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
							          <td><a href=\"show_school.php?s=$row[0]\">$row[1]</a></td>
                                      <td><a href=\"show_school.php?s=$row[0]\">$row[2]</td>
                                  </tr>";
								  
						else
							 echo "<tr class=\"black_text\" bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
							          <td><a href=\"show_school.php?s=$row[0]\">$row[2]</td>
                                      <td><a href=\"show_school.php?s=$row[0]\">$row[1]</td>
                                  </tr>";
					}
				  }
				  ?>
                  
                </table></td>
                <td width="28" rowspan="2" class="black_text" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td align="right" background="images/bottom_mid.jpg" class="blue_text_big"><!--DWLayoutEmptyCell-->&nbsp;</td>
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