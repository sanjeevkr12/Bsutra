<html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
 function validate_form()
{
	
	if (document.form9.search_term.value=="")
	{
		alert("Please enter a search term you want to look for");
		document.form9.search_term.focus();
		return false;
	}
	if (document.form9.section.value=="1")
	{
		alert("Please select a section to search in");
		document.form9.section.focus();
		return false;
	}
}
</script>
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
		<td width="100%" align="left" valign="top" bgcolor="#E0EDF3"><table width="100%" border="0" cellspacing="0" cellpadding="5"><!--DWLayoutTable-->
          <tr>
            <td width="100%" align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="28" height="83" align="left" background="images/top_mid.jpg" class="menu"><img src="images/top_left.jpg" alt="." width="28" height="83"></td>
                <td width="100%" background="images/top_mid.jpg" class="menu">Downloads</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                     <table width="100%" border="0" cellspacing="5" cellpadding="5">
      <form name="form9" method="post" onSubmit="return validate_form(this);" action="search_downloads.php">
                   <tr class="black_text">
                      <td height="22" colspan="5" valign="top"><p><strong>Search for files in Campus Life/Downloads</strong></p>                     </td>
        </tr>
                    <tr class="black_text">
                    <td width="226" height="22" ><p><select name="section" class="black_text">
                        <option value="1" selected="selected">Select a Section</option>
                        <option value="2">Campus Life</option>
                        <option value="3">Downloads - Aspirants</option>
                        <option value="4">Downloads - Students</option>
                      </select>
                      </p></td>
                      <td width="100"><label><input name="typ" type="radio" value="audio"></label>Audio </td>
                      <td width="100"><label><input name="typ" type="radio" value="video">
                      </label>Video</td>
                      <td width="100"><label><input name="typ" type="radio" value="text">
                      </label>
                        Text/Image</td>
                        <td width="100"><label><input name="typ" type="radio" value="all" checked>
                      </label>
                        All Types</td>
        </tr>
                    
                   <tr class="black_text">
                      <td width="226" >
                      Enter the Search Term<span class="warning_red">*(mandatory)</span><br>
                      <input name="search_term" type="text" class="black_text" size="40">                     </td>
                     <td  colspan="2" height="22" valign="top">Enter the Institute's Name (Optional)<br>
        <input name="institute" type="text" class="black_text" size="40"></td>  <td  colspan="2" width="205"><label>
                        <input name="Submit" type="submit" class="black_text" value="Search">
                        <input name="reset" type="reset" class="black_text" id="reset" value="Reset" />
                      </label></td>                  
                   </tr>    
                   </form></table>
                  <hr><br />     
           <? //choose the module 
		   
		   if($_GET['opt'])
		   $shw_opt=$_GET['opt'];
		   else $shw_opt=3;
		   
              //show the two modules and ask to select
			  echo "<p>Select the module you wish to view	:</span><p>";
			  echo "<strong><p class=\"blue_text_big\"><a href=\"downloads.php?opt=2\">For B-School Aspirants</a><br><br>
                <a href=\"downloads.php?opt=1\">For B-School Students</a></p></strong><hr><br>";		 
		 
		   if($shw_opt==2)
		   {
		   //b school aspirants
		 	?> <p class="blue_text_big">B-School Aspirants</p> <?
			echo "<table width=\"600\" class=\"black_text\" border=\"0\" cellspacing=\"2\" cellpadding=\"2\" bgcolor=\"#FFFFFF\">";
			echo "<tr bgcolor=\"#587681\" class=\"warning\"><th align=\"center\" >Name
		</th>
		<th align=\"center\" >Type
		</th>
		<th align=\"center\" >Size
		</th>
		<th align=\"center\" >View Details
		</th>
		</tr>";
						include("db.php");						
						$query = "select id,name,link,type,category,filesz,status from z_downloads order by id DESC";
						$dbresult = mysql_query($query);
						
						while($row = mysql_fetch_row($dbresult))
						{
if($row[4]=='0')
{
if($row[6]=='1')
{							
							
		if($row[3]=='Audio' || $row[3]=='Text/Image')					
		{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td><a href=\"$row[2]\"><span class=\"blue_text_small\">$row[1]</span></a>
		</td>
		<td>$row[3]
		</td>
		<td>$row[5]
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">View Details</span></a>
		</td>
 		</tr>";
 	    }
	else
	{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">$row[1]</span></a>
		</td>
		<td>$row[3]
		</td>
		<td align=\"center\" >-
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">Play Video</span></a>
		</td>
 		</tr>";
	}	
} 
 }
	}
echo "</table>";
		   }  
           else if($shw_opt==1)
		   {
		   //b school students
		   ?> <p class="blue_text_big">B-School Students</p> <?
		   echo "<table width=\"600\" class=\"black_text\" border=\"0\" cellspacing=\"2\" cellpadding=\"2\" bgcolor=\"#FFFFFF\">";
			echo "<tr bgcolor=\"#587681\" class=\"warning\"><th align=\"center\" >Name
		</th>
		<th align=\"center\" >Type
		</th>
		<th align=\"center\" >Size
		</th>
		<th align=\"center\" >View Details
		</th>
		</tr>";
						include("db.php");						
						$query = "select id,name,link,type,category,filesz,status from z_downloads order by id DESC";
						$dbresult = mysql_query($query);
						
						while($row = mysql_fetch_row($dbresult))
						{
if($row[4]=='1')
{
if($row[6]=='1')
{							
							
		if($row[3]=='Audio' || $row[3]=='Text/Image')					
		{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td><a href=\"$row[2]\"><span class=\"blue_text_small\">$row[1]</span></a>
		</td>
		<td>$row[3]
		</td>
		<td>$row[5]
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">View Details</span></a>
		</td>
 		</tr>";
 	    }
	else
	{
		echo "<tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
        <td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">$row[1]</span></a>
		</td>
		<td>$row[3]
		</td>
		<td align=\"center\" >-
		</td>
		<td><a href=\"view_details_d.php?id=$row[0]\"><span class=\"blue_text_small\">Play Video</span></a>
		</td>
 		</tr>";
	}	
} 
 }
	}
echo "</table>";
		   }     
		else if(($shw_opt!=2)||($shw_opt!=1)){ echo ("<p class=\"warning_red\">Please select a module to display from the menu shown above.</p>");
		}		
				
      
			
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
            <td width="305" align="left" valign="top"><? 
			include("sidebar.php");
		?></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
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