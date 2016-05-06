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
 

                          <?
						  include("db.php");
						  $val=$_GET['id'];
						  $query = "select type,filen from z_uploads where id='$val'";
						  $dbresult = mysql_query($query);
						  $row = mysql_fetch_row($dbresult);
						
if($row[0]!='Video')
{
$file="uploads/".$row[1];
unlink($file);
}
						  
$query = "delete from z_uploads where id='$val'";
$dbresult = mysql_query($query);

if($dbresult)
	echo "<script language=\"javascript\">alert(\"File deleted successfully ... Redirecting to Dashboard\");location.href=\"admin_dashboard.php\";</script>";
else
	echo "<script language=\"javascript\">alert(\"Some Error occured  ... Redirecting Back.. \");location.href=\"admin_manage_files.php\";</script>";
				
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