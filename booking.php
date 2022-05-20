<?php require("dbconnection.php");
if(!isset($_SESSION['logged_in']))
{
Header('Location:index.php');
exit;
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Bootstrap/stylesheet.css">
<link rel="icon" type="image/png" href="Images/hlogo.png" sizes="16x16">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
<title>ATMJapan</title>
</head>

<body>
<!-- header start --> 
<?php include("header.php"); ?>
<!-- header end --> 


<?php
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name=inputvalues($_POST['yourname']);
$stockno=inputvalues($_POST['stocknumber']);
$contactno=inputvalues($_POST['contactno']);
$email=inputvalues($_POST['email']);
$sessionname=inputvalues($_SESSION['logged_in']);
$sql="insert into booked(username,productstockno,contact,email,sessionname) 
values('$name','$stockno','$contactno','$email','$sessionname')";

$resultset=mysql_query($sql);

if($resultset){
	
$sql1="update vehicles set status='booked' where stockno=$stockno";
$rs=mysql_query($sql1);



?>

<div class="container" style="background-color:#CCF;"> 

<h1 class="ptext " style="color:#333333;margin-top:90px; "><b>Thank you for booking. You will be contacted very soon !</b> </h1>

<?php } ?>


<!--start of footer -->
<?php// include("footer.php");?>
<!-- end of footer -->

</body>
</html>