<html>
<head>
<title>BSutra |Formula for Success</title>
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
                <td width="100%" background="images/top_mid.jpg" class="menu">Search Results - Downloads/Campus Life</td>
                <td width="28" align="right" background="images/top_mid.jpg" class="menu"><img src="images/top_right.jpg" alt="." width="28" height="83"></td>
              </tr>
              <tr>
                <td width="28"  style="background-image:url(images/mid_left.jpg); background-repeat:repeat-y" class="black_text"></td>
                <td valign="top" background="images/mid_mid.jpg" class="black_text">
                
                <?php
include("db.php");
$qtype = 0;
$section = $_POST['section'];
$word = $_POST['search_term'];
$word_bold = "<strong>".$word."</strong>";
$type_temp = $_POST['typ'];
$insti = $_POST['institute'];
switch($type_temp)
{
	case "audio":$type = "Audio";break;
	case "video" :$type = "Video";break;
	case "text" :$type = "Text/Image";break;
	case "all" :$type = "All";break;
};	
//all types.. dont use type in query
if($type=="All")
{
if($section == '2') //search in campus life
{
$qtype=1;
if($insti == NULL) //no college entered
{$query = "select * from  z_uploads where (name LIKE '%$word%' || filen LIKE '%$word%') order by id DESC";
}
else //college was entered
{ 
	$query = "select * from  z_uploads where (name LIKE '%$word%' || filen LIKE '%$word%') && (institute LIKE '%$insti%') order by id DESC";
}
}
else if($section == '3')//dowloads - aspirants
{
$qtype=2;
	$query = "select * from  z_downloads where (category=0)&&(name LIKE '%$word%' || filen LIKE '%$word%') order by id DESC";
}
else if($section == '4') // downloads - students
{
$qtype=2;
	$query = "select * from  z_downloads where (category=1)&&(name LIKE '%$word%' || filen LIKE '%$word%') order by id DESC";
}
}

//end of all

//selective type
else
{
if($section == '2') //search in campus life
{
$qtype=1;
if($insti == NULL) //no college entered
{$query = "select * from  z_uploads where (name LIKE '%$word%' || filen LIKE '%$word%') && (type='$type') order by id DESC";
}
else //college was entered
{ 
	$query = "select * from  z_uploads where (name LIKE '%$word%' || filen LIKE '%$word%') && (institute LIKE '%$insti%')  && (type='$type') order by id DESC";
}
}
else if($section == '3')//dowloads - aspirants
{
$qtype=2;
	$query = "select * from  z_downloads where (category=0)&&(name LIKE '%$word%' || filen LIKE '%$word%') && (type='$type') order by id DESC";
}
else if($section == '4') // downloads - students
{
$qtype=2;
	$query = "select * from  z_downloads where (category=1)&&(name LIKE '%$word%' || filen LIKE '%$word%') && (type='$type') order by id DESC";
}

}
//end of selective

$dbresult = mysql_query($query);

if(mysql_num_rows($dbresult) < 1)
{
  echo "<div class=\"warning_red\">No results matching the criteria were found.</div>";
}
else
{
if($qtype==1)
{ echo "<span class=\"text_green\"><strong>Results Found</strong></span><br><br><table>";
	while($row=mysql_fetch_row($dbresult))
	{
		$row[1] = ereg_replace($word,$word_bold,$row[1]); 
		echo "<tr>
  <td ><!--DWLayoutEmptyCell-->&nbsp;</td>";
  echo "<td align=\"left\" class=\"black_text\"><a href=\"view_details.php?id=$row[0]\">".$row[1]."</a></td>";
  echo "<td ><!--DWLayoutEmptyCell-->&nbsp;</td>
</tr>";	
	}
echo "</table>";
}
else if($qtype==2)
{
echo "<span class=\"text_green\"><strong>Results Found</strong></span><br><br><table>";
	while($row=mysql_fetch_row($dbresult))
	{
		$row[1] = ereg_replace($word,$word_bold,$row[1]); 
		echo "<tr>
  <td><!--DWLayoutEmptyCell-->&nbsp;</td>";
  echo "<td align=\"left\"  class=\"black_text\"><br> <a href=\"view_details_d.php?id=$row[0]\">".$row[1]."</a></td>";
  echo "<td><!--DWLayoutEmptyCell-->&nbsp;</td>
</tr>";	
	}
	echo "</table>";
}	
}
?>
                
                </td>
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