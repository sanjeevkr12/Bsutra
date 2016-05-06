<?
	require("wp-login.php");
	require("wp-load.php");
	$user_login = $_POST['user'];
	$user_email = $_POST['email'];	
	//	do_action('register_post', $user_login, $user_email, $errors);
	
	$errors = register_new_user($user_login, $user_email);
		if ( !is_wp_error($errors) ) {
			wp_redirect('wp-login.php?checkemail=registered');
			exit();
		}
?>