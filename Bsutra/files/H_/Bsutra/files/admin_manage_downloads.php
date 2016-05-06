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
                <td width="100%" background="images/top_mid.jpg" class="menu">Downloads
                 <a href="admin_dashboard.php"><input name="button" type="button" class="black_text" value="Back to Dashboard"></a></td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                
                
                <?
				
			echo "<table width=\"800\" class=\"black_text\" border=\"0\" cellspacing=\"2\" cellpadding=\"2\" bgcolor=\"#FFFFFF\">";
			echo "<tr bgcolor=\"#587681\" class=\"warning\"><th align=\"center\" >Name
		</th>
		<th align=\"center\" >Module
		</th>
		<th align=\"center\" >Type
		</th>
		<th align=\"center\" >Size
		</th>
		<th align=\"center\" >View Details
		</th>
		<th align=\"center\" >Approval Status
		</th>
		<th align=\"center\" >Delete/Unapprove
		</th></tr>";
						include("db.php");						
						$query = "select id,name,link,type,category,filesz,status from z_downloads order by id DESC";
						$dbresult = mysql_query($query);
						
						while($row = mysql_fetch_row($dbresult))
						{
						if($row[4]=='0')
						 $str="For B-School Aspirants";
						else $str="For B-School Students"; 
if($row[6]=='1')
{							
		if($row[3]=='Audio' || $row[3]=='Text/Image')					
		{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td>$row[1]
		</td>
		<td>$str
		</td>
		<td>$row[3]
		</td>
		<td>$row[5]
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">View Details</span></a>
		</td>
		<td><span class=\"text_green\">Approved</span>
		</td>
		<td><a  href=\"admin_delete_file_d.php?id=$row[0]\"><span class=\"warning_red\">Delete File</span></a>
		</td>
 		</tr>";
 	    }
	else
	{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td>$row[1]
		</td>
		<td>$str
		</td>
		<td>$row[3]
		</td>
		<td align=\"center\" >-
		</td>
		<td><a  href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">Play Video</span></a>
		</td>
		<td><span class=\"text_green\">Approved</span>
		</td>
		<td><a  href=\"admin_delete_file_d.php?id=$row[0]\"><span class=\"warning_red\">Delete Video</span></a>
		</td>
 		</tr>";
	}	
 
}
else
{
 			if($row[3]=='Audio' || $row[3]=='Text/Image')					
		{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td>$row[1]
		</td>
		<td>$str
		</td>
		<td>$row[3]
		</td>
		<td>$row[5]
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">View Details</span></a>
		</td>
		<td><a href=\"admin_approve_file_d.php?id=$row[0]\"><span class=\"black_text\">Approve ?</span></a>
		</td>
		<td><a  href=\"admin_delete_file_d.php?id=$row[0]\"><span class=\"warning_red\">Delete File</span></a>
		</td>
 		</tr>";
 	    }
	else
	{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td>$row[1]
		</td>
		<td>$str
		</td>
		<td>$row[3]
		</td>
		<td align=\"center\" >-
		</td>
		<td><a  href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">Play Video</span></a>
		</td>
		<td><a href=\"admin_approve_file_d.php?id=$row[0]\"><span class=\"black_text\">Approve ?</span></a>
		</td>
		<td><a  href=\"admin_delete_file_d.php?id=$row[0]\"><span class=\"warning_red\">Delete Video</span></a>
		</td>
 		</tr>";
	}	
} 
	}
	echo "</table>";
		?>
		
                
                
                  <p>&nbsp;</p>                  </td>
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