<?php require("dbconnection.php");
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data= strtolower($data);
  return $data;
}
$username= inputvalues($_POST['username']);
$userpassword= md5($_POST['password']);
$status=inputvalues("allowed");

$sql="select * from users where username='$username' AND password='$userpassword'";
	
$boolstatus=mysql_query($sql);
	

if($row = mysql_fetch_array($boolstatus))
{
	if($username==$row['username'] && $userpassword==$row['password']  && $status==$row['status'] ){

$_SESSION['logged_in']=$row['username'];
header("Location:stocks.php");



	}
	else{

header("Location:status.php");
}
}
else{

header("Location:Createaccount.php");
}


?>
