<?php
session_start();
unset($_SESSION['username']);
session_destroy();
echo "Clearing out the session variables ...";
?>
<script language="javascript">
location.href="user.php";
</script> 
<!-- This website has been developed by DREAMZ STUDIOS
EMAIL :mail.dreamz.studios@gmail.com
PRIOR INFORMATION HAS TO BE TAKEN FROM
FLivE AND DREAMZ STUDIOS if you wish to use the code & graphics.
--> 