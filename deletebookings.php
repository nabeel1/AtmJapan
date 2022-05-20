<?php require("dbconnection.php");
$id=$_GET['id'];

$mysql="delete from booked where productstockno='$id'";
$rs=mysql_query($mysql);

header("Location:booked-cars.php");

?>