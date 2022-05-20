<?php require("dbconnection.php");
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$username=inputvalues($_POST['username']);
$userpassword=inputvalues($_POST['password']);

$sql="select username,password from administrator where username='$username' AND password='$userpassword'";
	
$boolstatus=mysql_query($sql);
	

if($row = mysql_fetch_array($boolstatus))
{
	if($username==$row['username'] && $userpassword==$row['password'] ){

$_SESSION['adminlogged_in']=$row['username'];
header("Location:admin-form.php");



	}
}
else{
header("Location:admin.php");
}


?>



