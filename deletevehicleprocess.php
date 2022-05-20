<?php require("dbconnection.php");
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$id=inputvalues($_POST['stockno']);

$mysql="delete from vehicles where stockno='$id'";

mysql_query($mysql);
header("Location:deletecars.php");

?>