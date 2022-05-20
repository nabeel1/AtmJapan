<?php require("dbconnection.php");
$id=$_GET['id'];

$mysql="delete from booked where productstockno='$id'";

$rs=mysql_query($mysql);
$abc="true";
if($abc=="true"){
$sql1="update vehicles set status='unbooked' where stockno='$id'";
$rs1=mysql_query($sql1);
header("Location:mybookings.php");

}

?>