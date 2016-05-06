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
                <td width="100%" background="images/top_mid.jpg" class="menu">Editing - <? $school=$_GET['n']; echo $school; ?> | <span class="black_text">
                  <input name="button" type="button" class="black_text" 
onClick="javascript: history.go(-2)" value="Back to Dashboard">
                </span></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="post" action="admin_edit_school2.php">
                  <p>&nbsp;</p>
                  <table width="80%" border="0" cellspacing="0" cellpadding="5">
                    <!--DWLayoutTable-->
					  
					  <?
					  	include("db.php");
					  	$id = $_GET['s'];
						$query = "select * from z_profile where id='$id'";
						$dbresult = mysql_query($query);
						$row = mysql_fetch_row($dbresult);
					  ?>
                    <tr class="black_text">
                      <td width="296" height="22" valign="top">Institute's Name</td>
                      <td width="406"><label>
                        <input name="name" type="text" class="black_text" id="name" value="<? echo $row[1]; ?>" size="40" maxlength="255">
                        <input name="id" type="hidden" id="id" value="<? echo $id; ?>">
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Grade</td>
                      <td>
					  <?
					  	if($row[10] == "B+")
							echo "<select name=\"grade\" class=\"black_text\" id=\"grade\">
                        <option value=\"B+\" selected>B+</option>
                        <option value=\"B-\">B-</option>
                                                                                        </select>";
						else
							echo "<select name=\"grade\" class=\"black_text\" id=\"grade\">
                        <option value=\"B+\">B+</option>
                        <option value=\"B-\" selected>B-</option>
                                                                                        </select>";
						
					  ?>					  </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">State (where the institute is) </td>
                      <td><input name="state" type="text" class="black_text" id="state" value="<? echo $row[2]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">City</td>
                      <td><input name="city" type="text" class="black_text" id="city" value="<? echo $row[12]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Ranking</td>
                      <td><input name="rank" type="text" class="black_text" id="rank" value="<? echo $row[3]; ?>" size="5" maxlength="5"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Description of the institute </td>
                      <td><label>
                        <textarea name="desc" cols="39" rows="5" class="black_text" id="desc"><? echo $row[4]; ?></textarea>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Fees (approx) </td>
                      <td><input name="fees" type="text" class="black_text" id="fees" value="<? echo $row[5]; ?>" size="10" maxlength="10"> 
                        Rs. </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Entrance Exam </td>
                      <td><input name="exam" type="text" class="black_text" id="exam" value="<? echo $row[14]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Minimum Percentile required to get admission </td>
                      <td><input name="percentile" type="text" class="black_text" id="percentile" value="<? echo $row[6]; ?>" size="5" maxlength="3"> 
                        (plz do not use decimal point. Just enter approx min.percentile) </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Median Salary </td>
                      <td><input name="salary" type="text" class="black_text" id="salary" value="<? echo $row[10]; ?>" size="20" maxlength="20">
                        Rs. </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Female-Mail Ratio </td>
                      <td><input name="mfr" type="text" class="black_text" id="mfr" size="10" value="<? echo $row[11]; ?>" maxlength="10"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Major Events </td>
                      <td><textarea name="events" cols="39" rows="3" class="black_text" id="events"><? echo $row[15]; ?></textarea></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Contact Hours </td>
                      <td><input name="contact" type="text" class="black_text" id="contact" value="<? echo $row[16]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">AICTE Approved </td>
                      <td><label>
                        <input name="ai" type="text" class="black_text" id="ai" value="<? echo $row[17]; ?>" size="10" maxlength="10">
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Student Strength </td>
                      <td><input name="student" type="text" class="black_text" id="student" value="<? echo $row[18]; ?>" size="10" maxlength="10"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Faculty</td>
                      <td><input name="faculty" type="text" class="black_text" id="faculty" value="<? echo $row[19]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Forms Available at </td>
                      <td><label>
                        <textarea name="forms" cols="39" rows="3" class="black_text" id="forms"><? echo $row[20]; ?></textarea>
                      </label></td>
                    </tr>
                    
                    <tr class="black_text">
                      <td height="22" valign="top">Other Info </td>
                      <td><textarea name="other" cols="39" rows="2" class="black_text" id="other"><? echo $row[7]; ?></textarea></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">BSUTRA FORUM LINK </td>
                      <td><input name="forum" type="text" class="black_text" id="forum" value="<? echo $row[8]; ?>" size="40" maxlength="255"> 
                        <br>
                        (Copy the link of the thread you made before adding details here 
                        ) </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Institute's Website </td>
                      <td><input name="website" type="text" class="black_text" id="website" value="<? echo $row[21]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Institute's Enquiry Email </td>
                      <td><input name="email" type="text" class="black_text" id="email" value="<? echo $row[9]; ?>" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top"><label>
                        <input name="Submit" type="submit" class="black_text" value="Update info for <? echo $row[1]; ?>">
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                </form>                  <p>&nbsp;</p>                </td>
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