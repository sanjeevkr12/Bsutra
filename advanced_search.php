<?php
session_start();
?><html>
<head>
<title>BSutra | Formula for Success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bsutra.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#help').hide();

$('a#helpclick').click(function(){
$('#help').show('slow');
});


});
</script>
</head>
<body bgcolor="#FFFFFF">
<!-- ImageReady Slices (design.psd) -->
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" id="Table_01"><!--DWLayoutTable-->
	<tr>
      <td width="978" height="142" valign="top" background="images/design_01.jpg"><?php 
			include("top.php");
		?></td>
  </tr>
	<tr>
		<td height="47" align="center" valign="top" background="images/design_03.jpg"><?php 
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
                <td valign="top" background="images/mid_mid.jpg" class="black_text"><form name="form1" method="post" action="advanced_results.php">
                  <p>&nbsp;</p>
                  <table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                    <tr>
                      <td colspan="4">NOTE : Every field is optional. You may enhance your search by filling one or more fields. </td>
                      </tr>
                    <tr>
                      <td width="25%">Choose a <strong>STRING</strong> field </td>
                      <td width="25%"><label>
<select name="f1" class="black_text" id="f1">
  <option value="name" selected>Institute Name</option>
  <option value="state">State</option>
  <option value="des">Institute Description</option>
  <option value="city">City </option>
  <option value="grade">Grade</option>
  <option value="exam">Entrance Exam</option>
  <option value="events">Major Events</option>
  <option value="Skip this field">Skip this field</option>
</select>
                      </label></td>
                      <td width="25%">Search Term</td>
                      <td width="25%"><label>
                        <input name="t1" type="text" class="black_text" id="t1" size="25" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#ECF7FD" class="black_text_big"><strong class="blue_text_small">- AND - </strong></td>
                      </tr>
                    <tr>
                      <td>Choose a <strong>NUMERIC</strong> field</td>
                      <td><label>
                        <select name="f2" class="black_text" id="f2">
                          <option value="rank">Rank</option>
                          <option value="fees">Fees</option>
                          <option value="percentile">Percentile</option>
                          <option value="salary">Median Salary</option>
                          <option value="student">Student Strength</option>
                          <option value="faculty">Faculty Strength</option>
                          <option value="Skip this field">Skip this field</option>
                        </select>
                      </label></td>
                      <td>Search Term </td>
                      <td><label>
                        <input name="t2" type="text" class="black_text" id="t2" value="&gt;" size="25" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="4"><label>
                        <input name="Submit" type="submit" class="black_text" value="Find me a Bschool">
                      </label></td>
                      </tr>
                  </table>
                  <br>
                </form>               
				
				<br><br>
				<form name="form1" method="post" action="advanced_results_1.php">
                  <p align="center" class="blue_text_big"><strong>Use this Form to Search on OR criteria </strong></p>
                  <table width="98%" border="0" cellpadding="5" cellspacing="0" class="black_text">
                    <tr>
                      <td colspan="4">NOTE : Every field is optional. You may enhance your search by filling one or more fields. </td>
                      </tr>
                    <tr>
                      <td width="25%">Choose a <strong>STRING</strong> field </td>
                      <td width="25%"><label>
<select name="f1" class="black_text" id="f1">
  <option value="name" selected>Institute Name</option>
  <option value="state">State</option>
  <option value="des">Institute Description</option>
  <option value="city">City </option>
  <option value="grade">Grade</option>
  <option value="exam">Entrance Exam</option>
  <option value="events">Major Events</option>
  <option value="Skip this field">Skip this field</option>
</select>
                      </label></td>
                      <td width="25%">Search Term</td>
                      <td width="25%"><label>
                        <input name="t1" type="text" class="black_text" id="t1" size="25" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="4" bgcolor="#ECF7FD" class="black_text_big"><strong class="blue_text_small">- OR - </strong></td>
                      </tr>
                    <tr>
                      <td>Choose a <strong>NUMERIC</strong> field</td>
                      <td><label>
                        <select name="f2" class="black_text" id="f2">
                          <option value="rank">Rank</option>
                          <option value="fees">Fees</option>
                          <option value="percentile">Percentile</option>
                          <option value="salary">Median Salary</option>
                          <option value="student">Student Strength</option>
                          <option value="faculty">Faculty Strength</option>
                          <option value="Skip this field">Skip this field</option>
                        </select>
                      </label></td>
                      <td>Search Term </td>
                      <td><label>
                        <input name="t2" type="text" class="black_text" id="t2" value="&gt;" size="25" maxlength="255">
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="4"><label>
                        <input name="Submit" type="submit" class="black_text" value="Find me a Bschool">
                      </label></td>
                      </tr>
                  </table>
                  <br>
                </form> </td>
                <td width="28" rowspan="2" class="black_text" style="background-image:url(images/mid_right.jpg); background-repeat:repeat-y">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#BEE4F8" class="black_text">				
				
				<div id="help"><strong>How to Use Advanced Search Effectively </strong></p>
                  <ol>
                    <li>Advanced Search can search on upto 2 fields at a time.<br>  
                      <br>
                  </li>
                  <li><strong>AND</strong> here means Intesection of results of Individual Fields. For example You search for Institute name IIM A <strong>AND</strong> Percentile 99. This returns intersection of results of keyword IIM A <strong>AND</strong> 99 percentile.<br>
                     <br>
                  </li>
                  <li><strong>OR </strong>means the Union.  For example You search for Institute name IIM A <strong>OR</strong> Percentile 99. This returns intersection of results of keyword IIM A <strong>OR</strong> 99 percentile i.e. all institutes requiring a percentile greater than 99 and IIM A result set.<br>
                    <br>
                  </li>
                  <li>If you are searching a <strong>numeric field</strong> like rank, then you have to specify the<strong> &quot;&gt;&quot; OR &quot;&lt;&quot; </strong>sign to tell the search engine your motive i.e. are you looking for Rank &gt; 'x' or Rank &lt; 'x'.<br>
                    <br>
                  </li>
                  <li>String fields always search on sub-string. So if you enter IIM, then this will automatically include results of IIM A , IIM B etc.<br>
                    <br>
                  </li>
                  <li>Click here to see a sample profile of a college that should give you an idea of the data format of each field. </li>
                </ol></div></td>
              </tr>
              <tr>
                <td width="28" height="78" background="images/bottom_mid.jpg"><img src="images/bottom_left.jpg" alt="." width="28" height="78"></td>
                <td align="right" background="images/bottom_mid.jpg" class="blue_text_big">
				
				
				<a href="#" id="helpclick"> <span class="black_text"><strong>Click here to read HOW TO USE ADVANCED SEARCH EFFECTIVELY</strong></span> </a></td>
                <td width="28" background="images/bottom_mid.jpg" "><img src="images/bottom_right.jpg" alt="." width="28" height="78"></td>
              </tr>
            </table>               </td>
            <td width="305" rowspan="2" align="right" valign="top"><?php 
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
		<?php 
			include("foot.html");
		?>&nbsp;</td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>