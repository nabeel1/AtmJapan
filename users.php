<?php require("dbconnection.php");
if(!isset($_SESSION['adminlogged_in']))
{
Header('Location:admin.php');
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
<div class="col-md-2">
<a href="admin-form.php" class="btn btn-info btn-block">Add a Car </a>
<a href="deletecars.php" class="btn btn-info btn-block">Delete a Car </a>
<a href="updatecars.php" class="btn btn-info btn-block">Update a Car </a>
<a href="booked-cars.php" class="btn btn-info btn-block">Booked Cars</a>
<a href="users.php" class="btn btn-info btn-block">Users</a>
 </div>

<div class="col-sm-10">
<h1 class="text-center " style="color:#333333;  margin-top:-60px;"> Users </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115); margin-top:15px;">

 
 <div class="row">
 <div class="col-xs-offset-1 col-md-10"> 
 
  <div class="table-responsive">
<table class="table table-striped">
<tr class="info">
<th>User Name</th>
<th>Status</th>
<th>Email</th>
<th>Update Status</th>
<th>Delete</th>
</tr>


<?php
$sql3="select * from users";
$resultset3=mysql_query($sql3);

while($row=mysql_fetch_array($resultset3)){
echo'<tr>';
echo('<td>'.$row['username'].'</td>');
echo('<td>'.$row['status'].' </td>');
echo('<td>'.$row['email'].'</td>');
echo('<td><a href="updateusers.php?id='.$row['id'].'">Update Status</a></td>');
echo('<td><a href="deleteusers.php?id='.$row['id'].'">Delete</a></td>');
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