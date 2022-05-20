<?php require("dbconnection.php");

unset($_SESSION['logged_in']);
unset($_SESSION['adminlogged_in']);
header("Location:index.php");
 ?>