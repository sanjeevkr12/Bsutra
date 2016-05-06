<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="bsutra.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="2000" border="0" cellpadding="7" cellspacing="1" bgcolor="#FFFFFF" class="black_text" style="overflow: auto;">
                    <thead>
                      <tr align="left" valign="middle" bgcolor="#587681" class="warning">
                        <th width="200" ><strong>Institute Name </strong></th>
                        <th><strong>City</strong></th>
						<th ><strong>Rank</strong></th>
						<th><strong>Grade</strong></th>
						<th ><strong>Exams</strong></th>
						<th width="40"><strong>CAT Cutoff Percentile</strong></th>
						<th ><strong>Fees in Lakhs </strong></th>
						<th><strong>Forms Available at</strong></th>
						<th ><strong>Median Salary</strong></th>
						<th><strong>Male Female Ratio</strong></th>
						<th ><strong>Daily Contact Hours</strong></th>
						<th><strong>Major Events</strong></th>
						<th bgcolor="#587681" ><strong>Faculty</strong></th>
						<th><strong>AICTE Approved</strong></th>
						<th ><strong>Website URL</strong></th>
						<th><strong>Student Strength</strong></th>
						<th ><strong>State</strong></th>
						<th width="300"><strong>Description & Address</strong></th>
						<th ><strong>Other Info</strong></th>
					



                        
                      </tr>
                    </thead>
                    <?
				  	include("db.php");
					$cnt=0;
					$query = "select id,name,city,rank,grade,exam,percentile,fees,forms,salary,mfr,contact,events,faculty,aicte,website,student,state,des,other from z_profile order by rank limit 0,15";
					$dbresult = mysql_query($query);
					
					while($row= mysql_fetch_row($dbresult))
					{
						if(($cnt%2)==0){
						echo " <tr  bgcolor=\"#ECF7FD\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#ECF7FD'\">
                    <td><a href=\"show_school.php?s=$row[0]\" target=\"_blank\"><u>$row[1]</u></a></td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					<td>$row[7]</td>
					<td>$row[8]</td>
					<td>$row[9]</td>
					<td>$row[10]</td>
					<td>$row[11]</td>
					<td>$row[12]</td>
					<td>$row[13]</td>
					<td>$row[14]</td>
					<td>$row[15]</td>
					<td>$row[16]</td>
					<td>$row[17]</td>
					<td>$row[18]</td>
					<td>$row[19]</td>
                  </tr>";
				  $cnt++;
				  }
				 else 
				 {
				 echo " <tr  bgcolor=\"#BEE4F8\" onMouseOver=\"this.style.backgroundColor='#EBEBEB'\"; onMouseOut=\"this.style.backgroundColor='#BEE4F8'\">
                    <td><a href=\"show_school.php?s=$row[0]\" target=\"_blank\"><u>$row[1]</u></a></td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					<td>$row[7]</td>
					<td>$row[8]</td>
					<td>$row[9]</td>
					<td>$row[10]</td>
					<td>$row[11]</td>
					<td>$row[12]</td>
					<td>$row[13]</td>
					<td>$row[14]</td>
					<td>$row[15]</td>
					<td>$row[16]</td>
					<td>$row[17]</td>
					<td>$row[18]</td>
					<td>$row[19]</td>
                  </tr>";
				   $cnt++;
				  } 
				  
					}
				  ?>
</table>
</body>
</html>
