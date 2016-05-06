<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

<body>

      
        <table width="65%" border="0" cellspacing="5" cellpadding="5">
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
                      <td><label><input name="typ" type="radio" value="audio"></label>Audio </td>
                      <td><label><input name="typ" type="radio" value="video">
                      </label>Video</td>
                      <td><label><input name="typ" type="radio" value="text">
                      </label>
                        Text/Image</td>
                        <td><label><input name="typ" type="radio" value="all" checked>
                      </label>
                        All Types</td>
        </tr>
                    
                   <tr class="black_text">
                      <td width="226" >
                      Enter the Search Term<span class="warning_red">*(mandatory)</span><br>
                      <input name="search_term" type="text" class="black_text" size="40"> 
                     </td>
                     <td  colspan="4" width="226" height="22" valign="top">Enter the Institute's Name (Optional)<br>
        <input name="institute" type="text" class="black_text" size="40"></td>                    </tr>    
                  
                    <tr class="black_text">
                      <td height="22" valign="top"></td>
                      <td colspan="4"><label>
                        <input name="Submit" type="submit" class="black_text" value="Search">
                        <input name="reset" type="reset" class="black_text" id="reset" value="Reset" />
                      </label></td>
                    </tr></form></table>
</body>
</html>
