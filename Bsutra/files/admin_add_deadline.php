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
<title>BSutra |  Formula for Success</title>
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Add Deadline for an Institute | <span class="black_text">
                  <a href="admin_dashboard.php">
                  <input name="button" type="button" class="black_text" 
 value="Back to Dashboard"></a></span></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="post" action="admin_add_deadline1.php">
                  <p>&nbsp;</p>
                  <table width="90%" border="0" cellpadding="5" cellspacing="0" class="black_text">
				  <?
				  include("db.php");
				  $query = "select id,name from z_profile order by name";
				  $dbresult = mysql_query($query);
				  
				  if(mysql_num_rows($dbresult) < 1)
				  {
				  	echo "<script language=\"javascript\">alert(\"No Exam exists in Database for which you can enter a deadline. Redirecting to ENTER EXAM DETAILS PAGE\");location.href=\"admin_add_exam.php\";</script>";
				  }
				  ?>
                    <tr>
                      <td width="29%" valign="top">Institute Name </td>
                      <td width="71%"><label>
                        <select name="exam" size="10" class="black_text" id="exam">
						<?
							while ($row = mysql_fetch_row($dbresult))
							{	
								echo "<option value=\"$row[0]\">$row[1]</option>";
							}
						?>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td valign="top">Deadline For ??? <br></td>
                      <td valign="top"><label>
                        <input name="name" type="text" class="black_text" id="name" value="Enter Application form or GD or Festival etc" size="60" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td valign="top">Comments for the deadline event<br>
                        <br>
                          <em>[This is optional. If you feel your comments can help someone, then enter them here]</em></td>
                      <td valign="top"><label>
                        <textarea name="comment" cols="50" rows="5" class="black_text" id="comment"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td valign="top">Deadline </td>
                      <td valign="top"><label>
                        <select name="yy"  class="black_text" id="yy">
                          <option value="0" selected="selected">Year</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                        </select>
                      </label>
                        <label>
                        <select name="mm"  class="black_text" id="mm">
                          <option value="0" selected>Month</option>
                          <option value="1">January</option>
                          <option value="2">February</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                        </label>
                        <label>
                        <select name="dd"  class="black_text" id="dd">
                          <option value="0" selected="selected">Day</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                        </label></td>
                    </tr>
                    <tr>
                      <td colspan="2" valign="top"><input name="Submit" type="submit" class="black_text" value="Insert Deadline"></td>
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