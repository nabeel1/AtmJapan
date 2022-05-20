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



<div class="container-fluid" style=" margin-top:150px;"> 

<div  class="row">
<div class="col-sm-2">

 </div>

<div class="col-sm-10">
<h1 class="text-center " style="color:#333333;  margin-top:-60px;"> My Booked Cars </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115); margin-top:15px;">

 
 <div class="row">
 <div class="col-xs-offset-1 col-sm-10"> 
 
  <div class="table-responsive">
<table class="table table-striped">
<tr class="info">
<th>Product Image</th>
<th>Product Stock #</th>
<th>User Name</th>
<th>Contact</th>
<th>Email</th>
<th>View car Details</th>
</tr>


<?php
$sname=$_SESSION['logged_in'];
$sql3="select * from booked where sessionname='$sname'";
$resultset3=mysql_query($sql3);




while($row=mysql_fetch_array($resultset3)){

$pstock=$row['productstockno'];
$sql4="select vehicles.image1 from vehicles where vehicles.stockno=$pstock";

$resultset4=mysql_query($sql4);
$row2=mysql_fetch_array($resultset4);

echo'<tr>';


echo('<td>'.'<img class="img-circle" src='.$row2['image1'].' width="70px" height="60px">'.'</td/>');

echo('<td>'.$row['productstockno'].'</td>');
echo('<td>'.$row['username'].'</td>');
echo('<td>'.$row['contact'].'</td>');
echo('<td>'.$row['email'].'</td>');
echo('<td><a href="carview.php?id='.$row['productstockno'].'">View Car Details</a></td>');
echo'</tr>';
}
?>

</table>
</div><!-- end of domains -->


<div id="clear-sec"></div>


<br>
<br>
<br>

</div><!-- inside form 1st col end-->


</div><!--inside form row end-->




<!-------------------            ------------------------------>
</div>
</div>

 </div>
</div>
<!-- container end-->



<!--start of footer -->
<?php include("footer.php");?>
<!-- end of footer -->

<!-- Latest compiled and minified JavaScript -->

<script src="Bootstrap/js/bootstrap.min.js"></script>
<script 
src="https://www.bootstrapskins.com/google-maps-authorization.js?id=1c150919-c678-1a10-c97a-f597084f6f83&c=google-maps-code&u=1450373278" defer async>
</script>

</body>
</html>