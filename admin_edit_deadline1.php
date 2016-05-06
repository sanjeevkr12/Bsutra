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
				
				<?
					$id=$_GET['s'];
					$name= $_GET['n'];
					$exam =$_GET['e'];
				?>
                <td width="100%" background="images/top_mid.jpg" class="menu">Editing <? echo "$exam - $name"; ?> | <span class="black_text">
                  <a href="admin_dashboard.php">
                  <input name="button" type="button" class="black_text" 
 value="Back to Dashboard"></a></span></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="post" action="admin_edit_deadline2.php">
                  <p>&nbsp;</p>
                  <table width="90%" border="0" cellpadding="5" cellspacing="0" class="black_text">
				  <?
				  include("db.php");
				  $query = "select id,name from z_profile order by name";
				  $dbresult = mysql_query($query);
				  
				  
				  
				  if(mysql_num_rows($dbresult) < 1)
				  {
				  	echo "<script language=\"javascript\">alert(\"No Exam exists in Database for which you can modify a deadline. Redirecting to ENTER EXAM DETAILS PAGE\");location.href=\"admin_add_exam.php\";</script>";
				  }
				  ?>
                    <tr>
                      <td width="29%" valign="top">Exam Name </td>
                      <td width="71%"><label>
                        <select name="exam" size="10" class="black_text" id="exam">
						<?
							while ($row = mysql_fetch_row($dbresult))
							{	
								if($row[1] == $exam) 
									echo "<option value=\"$row[0]\" selected=\"selected\">$row[1]</option>";
								else
									echo "<option value=\"$row[0]\">$row[1]</option>";
							}
						?>
                        </select>
                        <input name="id" type="hidden" id="id" value="<? echo $id; ?>">
                      </label></td>
                    </tr>
					
					<?
						$query = "select name,comment,deadline from z_deadline where id = '$id'";
						$dbresult = mysql_query($query);
						$row = mysql_fetch_row($dbresult);
						
						
						$mm = $row[2][5].$row[2][6];
						$dd = $row[2][8].$row[2][9];
						$yy = $row[2][0].$row[2][1].$row[2][2].$row[2][3];
							
							
					?>
                    <tr>
                      <td valign="top">Deadline For ??? <br></td>
                      <td valign="top"><label>
                        <input name="name" type="text" class="black_text" id="name" value="<? echo $row[0]; ?>" size="60" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td valign="top">Comments for the deadline event<br>
                        <br>
                          <em>[This is optional. If you feel your comments can help someone, then enter them here]</em></td>
                      <td valign="top"><label>
                        <textarea name="comment" cols="50" rows="5" class="black_text" id="comment"><? echo $row[1]; ?></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <td valign="top">Deadline </td>
                      <td valign="top"><label>
                        <select name="yy"  class="black_text" id="yy">
                           <?
						  for($i=2009;$i<2017;$i++)
						  {
						  	  if ($i == $yy)
							  	echo" <option value=\"$i\" selected>$i</option>";
							
							  else
							  	echo" <option value=\"$i\">$i</option>";
							}
						  ?>
                        </select>
                      </label>
                        <label>
                        <select name="mm"  class="black_text" id="mm">
                         <?
						  for($i=1;$i<13;$i++)
						  {
						  	  if ($i == $mm)
							  	echo" <option value=\"$i\" selected>$i</option>";
							
							  else
							  	echo" <option value=\"$i\">$i</option>";
							}
						  ?>
                        </select>
                        </label>
                        <label>
                        <select name="dd"  class="black_text" id="dd">
                          <?
						  for($i=1;$i<32;$i++)
						  {
						  	  if ($i == $dd)
							  	echo" <option value=\"$i\" selected>$i</option>";
							
							  else
							  	echo" <option value=\"$i\">$i</option>";
							}
						  ?>
                        </select>
                        </label></td>
                    </tr>
                    <tr>
                      <td colspan="2" valign="top"><input name="Submit" type="submit" class="black_text" value="Update Deadline"></td>
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