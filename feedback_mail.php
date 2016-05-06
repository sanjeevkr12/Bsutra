 <html>
 <head>
 <link href="dare.css" rel="stylesheet" type="text/css">
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <title>BSutra | Let the reliable authority solve your query</title></head>
<body>
<?php

$name = $_POST['name'];
$email_1 = $_POST['email'];
$feedback = $_POST['feedback'];

ereg_replace("\n","<br>",$feedback);

/*This website has been developed by DREAMZ STUDIOS
EMAIL :mail.dreamz.studios@gmail.com
PRIOR INFORMATION HAS TO BE TAKEN FROM
FLivE AND DREAMZ STUDIOS if you wish to use the code & graphics.*/

include("db.php"); 


$email = "feedback@bsutra.com";

$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $name <$email_1>";
$md5 = md5($email);
// The subject
$subject = "Feedback for BSutra.com from $name";
// The message
$message = $feedback;

mail($email, $subject, $message, $headers);

echo "<script language=\"javascript\">alert(\"Thank you for your feedback. We will look into your suggestions.\");location.href=\"index.php\";</script>";

?>  
</body>
</html>