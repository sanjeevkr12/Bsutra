<?php
include("db.php");
$handle = fopen("data.txt", "r");
while (($data = fgetcsv($handle,",")) !== FALSE) 
{
	$num = count($data);
	echo "<p> $num fields in line <br /></p>\n";
	for ($c=0; $c < $num; $c++) 
	{
		$state = $data[$c];
		$c++;
		$name = $data[$c];
		$c++;
		$city = $data[$c];
		$c++;
		$email = $data[$c];
		$c++;
		$website = $data[$c];
		$query = "insert into z_profile (state,name,city,email,website) values ('$state','$name','$city','$email','$website')";
		$dbresult = mysql_query($query);
		if($dbresult)
			echo "SUCCESS !!!<br>";
		else
			echo "FAIL !!!!!!!!!!!!!!!!!!!!!!!!<br>";
		echo $data[$c] . "<br />\n";
	}
}
fclose($handle);
?>