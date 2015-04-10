<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
include "db.php";
if($_POST[ 'name' ]!="") {
$name = mysql_real_escape_string($_POST["name"]);
$nick_name = mysql_real_escape_string($_POST["nick_name"]);
$email = mysql_real_escape_string($_POST["email"]);
$password = mysql_real_escape_string($_POST["password"]);

$sql = "insert into members set name='".$name."', nick_name='".$nick_name."', email='".$email."', password='".md5($password)."' ";
$sql = mysql_query($sql);



$msg = '
<p class = "tanx">Thank you for completing your online registration form!.';
}else{
$msg = "Your enquiry sending failed";
}	

?>
<div class="thanks-text">
<?php echo $msg?>


</div>
</body>
</html>