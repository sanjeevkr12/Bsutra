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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="10"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Add a BSchool Profile</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="post" action="share_school1.php">
                  <p>&nbsp;</p>
                  <table width="80%" border="0" cellspacing="0" cellpadding="5">
                    <!--DWLayoutTable-->
                    <tr class="black_text_big">
                      <td height="22" colspan="2" valign="top" bgcolor="#ECF7FD"><strong class="blue_text_big">Enter as much Info as you can</strong></td>
                      </tr>
                    <tr class="black_text">
                      <td width="296" height="22" valign="top">Institute's Name</td>
                      <td width="406"><label>
                        <input name="name" type="text" class="black_text" id="name" size="40" maxlength="255">
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Category</td>
                      <td><label>
                        <select name="category" class="black_text" id="category">
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">State (where the institute is) </td>
                      <td><select name="state" class="black_text" id="state">
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
                                                                                        </select></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">City</td>
                      <td><input name="city" type="text" class="black_text" id="city" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Ranking</td>
                      <td><input name="rank" type="text" class="black_text" id="rank" size="5" maxlength="5"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Grade</td>
                      <td><input name="grade" type="text" class="black_text" id="grade" size="5" maxlength="5"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Description of the institute (also include the address of the institue here) </td>
                      <td><label>
                        <textarea name="desc" cols="39" rows="5" class="black_text" id="desc"></textarea>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Fees</td>
                      <td><input name="fees" type="text" class="black_text" id="fees" size="10" maxlength="10"> 
                        lakh Rs. </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Entrance Exam </td>
                      <td><input name="exam" type="text" class="black_text" id="exam" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Minimum Percentile required to get admission </td>
                      <td><input name="percentile" type="text" class="black_text" id="percentile" size="5" maxlength="5"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Median Salary </td>
                      <td><input name="salary" type="text" class="black_text" id="salary" size="20" maxlength="20"> 
                        lakh Rs. </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Female-Male Ratio </td>
                      <td><input name="mfr" type="text" class="black_text" id="mfr" size="10" maxlength="10"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Major Events </td>
                      <td><textarea name="events" cols="39" rows="3" class="black_text" id="events"></textarea></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Contact Hours </td>
                      <td><input name="contact" type="text" class="black_text" id="contact" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">ACITE Approved ?? </td>
                      <td><label>
                        <select name="aicte" class="black_text" id="aicte">
                          <option value="yes">yes</option>
                          <option value="no">no</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Student Strength </td>
                      <td><input name="student" type="text" class="black_text" id="student" size="10" maxlength="10"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Faculty</td>
                      <td><input name="faculty" type="text" class="black_text" id="faculty" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Forms Available at </td>
                      <td><label>
                        <textarea name="forms" cols="39" rows="3" class="black_text" id="forms"></textarea>
                      </label></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Other Info </td>
                      <td><textarea name="other" cols="39" rows="3" class="black_text" id="other"></textarea>
                        <input name="forum" type="hidden" id="forum"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Institute's Website </td>
                      <td><input name="website" type="text" class="black_text" id="website" value="http://" size="40" maxlength="255">
                        <br>
                        (including http:// is compulsary) </td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top">Institute's Enquiry Email </td>
                      <td><input name="email" type="text" class="black_text" id="email" size="40" maxlength="255"></td>
                    </tr>
                    <tr class="black_text">
                      <td height="22" valign="top"><label>
                        <input name="Submit" type="submit" class="black_text" value="Submit">
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                </form>                  <p>&nbsp;</p>                  </td>
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