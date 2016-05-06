<?php
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
      <td height="142" colspan="2" valign="top" background="images/design_01.jpg"><?php 
			include("top.php");
		?></td>
  </tr>
	<tr>
		<td height="47" colspan="2" align="center" valign="top" background="images/design_03.jpg"><?php 
			include("menu.php");
		?></td>
	</tr>
	<tr>
      <td height="194" colspan="2" align="center" background="images/design_05.jpg"><img src="images/design_06.jpg" width="852" height="194" alt="."></td>
  </tr>
  <tr>
  
  <td width="867" bgcolor="#EBF3F6">
  <marquee style="background-color: #EBF3F6;" direction="left" width="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
<span class="blue_text_small"><strong>

<?
include("db.php");
$query = "select title,link from z_watch order by id LIMIT 0,15";
$dbresult = mysql_query($query);

while($row = mysql_fetch_row($dbresult))
{
	echo "<a href=\"$row[1]\" target=\"_blank\">&nbsp;&nbsp;$row[0]&nbsp;&nbsp;|</a>";
}

?></strong></span>
  </marquee>  </td>
  <td width="111" height="30"  style="padding-right:10px;" align="right" bordercolor="#EBF3F6" bgcolor="#587681" class="warning"><strong>B-School Watch </strong></td>
  </tr>
	<tr>
		<td colspan="2" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Best B-School for You </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="get" action="best_bschool.php">
                  <p>&nbsp;</p>
                  <table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                    <tr>
                      <td colspan="2">NOTE : Every field is optional. You may enhance your search by filling one or more fields. </td>
                      </tr>
                    <tr>
                      <td width="15%">State</td>
                      <td width="85%"><label>
<select name="state" class="black_text" id="state">
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Delhi">Delhi</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Orissa">Orissa</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="West Bengal">West Bengal</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Andaman and Nicobar">Andaman and Nicobar</option>
  <option value="Laksadweep">Laksadweep</option>
  <option value="Dadar &amp; Nagar Haweli">Dadar &amp; Nagar Haweli</option>
  <option value="Pondicherry">Pondicherry</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="All States" selected>All States</option>
</select>                      
(Indian States) 
<input name="count" type="hidden" id="count" value="0">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#ECF7FD" class="black_text_big"><strong class="blue_text_small">- AND - </strong></td>
                      </tr>
                    <tr>
                      <td>Fees</td>
                      <td><label>
                        <select name="fees" class="black_text" id="fees">
                          <option value="1">&lt; 1 lak</option>
                          <option value="2">1 lakh - 3 lakh</option>
                          <option value="4">3 lakh - 5 lakh</option>
                          <option value="6">5 lakh - 7 lakh</option>
                          <option value="8">7 lakh - 9 lakh</option>
                          <option value="10">9 lakh - 11 lakh</option>
                          <option value="12">11 lakh - 12 lakh</option>
                          <option value="13">&gt;12 lakh</option>
                          <option value="0">Dont Search on this criteria</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#ECF7FD" class="black_text_big"><strong class="blue_text_small">- AND - </strong></td>
                    </tr>
                    <tr>
                      <td>Percentile</td>
                      <td><label>
                        <select name="percentile" class="black_text" id="percentile">
                         <?php
						 for($i=100;$i>=50;$i--)
						 	echo "<option value=\"$i\">$i</option>";
						 ?> 
                        </select>
                      (let it be 100 if you want to ignore this field in your search criteria) </label></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <input name="Submit" type="submit" class="black_text" value="Find me a Bschool">
                      </label></td>
                      </tr>
                  </table>
                  <br>
                </form>                </td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td align="right" background="images/bottom_mid.jpg" class="blue_text_big"><strong><a class="blacklink" href="share_school.php">Share info of a B-School you know about</a> </strong></td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>               </td>
            <td width="305" rowspan="2" align="right" valign="top"><? 
			include("sidebar.php");
		?></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="rank">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">List of B-Schools |
                <a href="advanced_search.php"><strong>Advanced Search                </strong></a></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td height="400" valign="top" background="images/mid_mid.jpg" class="black_text">
				
				
				<iframe src="list_bschools.php" width="100%" height="400" scrolling="auto" frameborder="0">                </iframe>                </td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td align="right" background="images/bottom_mid.jpg"><label>
                  <a class="blacklink" href="advanced_search.php"><strong>Advanced Search</strong></a>
                </label></td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="grade">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td colspan="2" background="images/top_mid.jpg" class="menu">Recent Uploads </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td width="50%" valign="top" background="images/mid_mid.jpg" class="black_text"><table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                  <tr>
                    <td width="100%" class="blue_text_big"><strong>Recent Uploads in Campus Life </strong></td>
                  </tr>

				<?
					
					$query = "select id,name,status from z_uploads order by id DESC LIMIT 0,10";
					$dbresult = mysql_query($query);
					
					while($row = mysql_fetch_row($dbresult))
					{
						if($row[2]=='1')
						{
						echo "<tr>
                   					 <td><a href=\"view_details.php?id=$row[0]\">$row[1]</a></td>
                  			  </tr>";
					    }
					}
					
					?>
					
                  
                </table>                <p>&nbsp;</p></td>
                <td width="50%" valign="top" background="images/mid_mid.jpg" class="black_text"><table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                  <tr>
                    <td width="100%" class="blue_text_big"><strong>Recent Uploads in Downloads </strong></td>
                  </tr>
                 <?
					
					$query = "select id,name,status from z_downloads order by id DESC LIMIT 0,10";
					$dbresult = mysql_query($query);
					
					while($row = mysql_fetch_row($dbresult))
					{
						if($row[2]=='1')
						{
						echo "<tr>
                   					 <td><a href=\"view_details_d.php?id=$row[0]\">$row[1]</a></td>
                  			  </tr>";
					    }
					}
					
					?>
                </table></td>
                <td width="28" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y" class="black_text">&nbsp;</td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td colspan="2" background="images/bottom_mid.jpg">&nbsp;</td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table></td>
            <td align="right" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          
        </table>
	  <p>&nbsp;</p></td>
    </tr>
	<tr>
		<td height="186" colspan="2" valign="top" bgcolor="#000000">
		<?php
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>