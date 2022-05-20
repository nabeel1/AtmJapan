<?php require("dbconnection.php");

function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$username=inputvalues($_POST['username']);
$userpassword=md5(inputvalues($_POST['password']));
$useremail=inputvalues($_POST['contact-email']);
$usercontact=inputvalues($_POST['contact']);
	$sql="insert into users(username,password,email,contact) values('$username','$userpassword','$useremail',$usercontact)";
$boolstatus=mysql_query($sql);
	if($boolstatus)
	header("Location:index.php");
?>

