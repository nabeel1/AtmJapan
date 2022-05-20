<?php require("dbconnection.php");
$status=$_POST['userstatus'];
$id=$_POST['Id'];

$mysql="update users set status='$status' where id=$id";
mysql_query($mysql);

header("Location:users.php");

?>