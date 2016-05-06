<?php
 session_start();
 if(!isset($_SESSION["user"]))
  {
  		echo "Session Expired";
		echo "<br>Click here to go to <a href=\"admin.php\">Login Page</a>";
		exit();
  }  
  $user = $_SESSION["user"]; 
?>
<html>
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Administrator Dashboard </td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                  <tr>
                    <td><a href="admin_add_school.php">Add BSchool Profile </a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_edit_school.php">Edit BSchool Profile </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_add_faq.php">Add MBA FAQs</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_edit_faq.php">Edit / Delete MBA FAQs </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_add_exam.php">Enter Exam Details</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_edit_exam.php">Edit Exam Details </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_campuslife.php">Upload Files in Campus Life </a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_manage_files.php">Manage(Approve/Delete) Files In Campus Life </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_downloads.php">Upload Files in Downloads </a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_manage_downloads.php">Manage(Approve/Delete) Files In Downloads </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_add_deadline.php">Enter Deadlines/Important Event Date for an Institute </a></td>
                  </tr>
                  <tr>
                    <td><a href="admin_edit_deadline.php">Edit Deadlines/Important Event Date </a></td>
                  </tr>
                  <tr>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <td><a href="admin_add_bwatch.php">Enter B-School Watch</a> </td>
                  </tr>
                  <tr>
                    <td><a href="admin_delete_bwatch.php">Delete B-School Watch </a></td>
                  </tr>
                </table>                
                <p>&nbsp;</p>                </td>
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