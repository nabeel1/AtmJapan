<?php require("dbconnection.php");
$id=$_GET['id'];

$mysql="delete from users where id='$id'";

mysql_query($mysql);
header("Location:users.php");

?>