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
<a href="updatecars.php" class="btn btn-info btn-block">Update a Car</a>
<a href="booked-cars.php" class="btn btn-info btn-block">Booked Cars</a>
<a href="users.php" class="btn btn-info btn-block">Users</a>

 </div>

<div class="col-sm-10">
<h1 class="text-center " style="color:#333333;  margin-top:-60px;"> Update Car </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115); margin-top:15px;">

<div class="row">

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  role="form" >
 
 <div class="col-xs-offset-1 col-md-5"> 
 
  <div class="main-flabel-wraper">
  <label for="name" class="flabel">Stock number:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="stockno" name="stockno" type="text"  style="width:200px" placeholder="Enter stock no of car" required />
</div>

<div id="clear-sec"></div>


<br>
<br>
<br>
<div class="frow-wraper">
<input id="saveButton" type="submit" class="btn btn-primary" style="width:100px" value="Search" />

</div>
</div><!-- inside form 1st col end-->



</form> 
</div><!--outside form row end-->

<?php 
$rs_result="";
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$vid=inputvalues($_POST['stockno']);
$_SESSION["searchidforcar"]=$vid;

$mysql="select * from vehicles where stockno='$vid'";
$rs_result=mysql_query($mysql);  

}

?>

<form action="updatecarprocess.php" method="post" enctype="multipart/form-data" role="form" >
 
 <?php
 if($rs_result){
while($row=mysql_fetch_assoc($rs_result)){
 echo('<div class="row">');
echo(' <div class="col-sm-6">'); 

echo('<br>');


echo('<img class="img-thumbnail" id="large-image" src='.$row['image1'].' alt="shoes" height="232" width="350">');
echo('<br>');
echo('<img class="img-thumbnail adimage-thumbnail" src='.$row['image1'].' alt="shoes" height="100" width="100">');
echo('<img class="img-thumbnail adimage-thumbnail" src='.$row['image2'].' alt="shoes" height="100" width="100">');
echo('<img class="img-thumbnail adimage-thumbnail" src='.$row['image3'].' alt="shoes" height="100" width="100">');
echo('<img class="img-thumbnail adimage-thumbnail" src='.$row['image4'].' alt="shoes" height="100" width="100">');
echo('<br>');
echo('<br>');
echo('<input id="photo1" name="photo1" type="file" />');
echo('<input id="photo2" name="photo2" type="file" />');
echo('<input id="photo3" name="photo3" type="file" />');
echo('<input id="photo4" name="photo4" type="file" />');


echo('<br>');
echo('<br>');
  echo('Name');
  echo('<b><p style="font-size:22px; color:#000; font-weight:bold;"> '.$row['name'].' </p></b>');
 echo(' <input type="text" name="name" placeholder="enter name to update">');
 echo(' <br>');
 echo('Stock#:');
 echo('<p id="size" class="flabel"> '.$row['stockno'].' </p> ');
  echo('<input type="text" name="stockno" placeholder="enter stockno to update">');
  echo('<br>');
 echo(' Make:');
 echo('<p  id="size" class="flabel">'.$row['make'].' </p>');
  echo('<input type="text" name="make" placeholder="Enter make to update">');

 echo('</div>');

echo('<div class="col-sm-6"> ');

 echo(' <br>');

  echo('Model:');
  echo('<b><p id="color" class="flabel">'.$row['model'].' </p></b>');
  echo('<input type="text" name="model" placeholder="enter model to update">');
  
  echo(' <br>');
  echo('Cahssisno:');
  echo('<b><p  id="color" class="flabel">'.$row['chassisno'].' </p></b>');
  echo('<input type="text" name="chassisno" placeholder="enter chassis# to update">');
  
  echo(' <br>');
  echo('Color:');
  echo('<b><p  id="color" class="flabel">'.$row['color'].' </p></b>');
  echo('<input type="text" name="color" placeholder="enter color to update">');
 
  
  echo(' <br>');
  echo('Stockstatus:');
  echo('<b><p  id="color" class="flabel">'.$row['stockstatus'].' </p></b>');
  echo('<input type="text" name="stockstatus" placeholder="enter stockstatus to update">');
  echo(' <br>');
  echo('Year:');
  echo('<b><p  id="color" class="flabel">'.$row['year'].' </p></b>');
  echo('<input type="text" name="year" placeholder="enter year to update">');
  
  echo(' <br>');
  echo('Transimission:');
  echo('<b><p id="color" class="flabel">'.$row['transmission'].' </p></b>');
  echo('<input type="text" name="transmission" placeholder="enter transmission to update">');
  
  echo(' <br>');
  echo('Engine Capacity:');
  echo('<b><p  id="color" class="flabel">'.$row['enginecapacity'].' </p></b>');
  echo('<input type="text" name="ecap" placeholder="enter engine-cap to update">');
  
  echo(' <br>');
  echo('Fuel:');
  echo('<b><p  id="color" class="flabel">'.$row['fuel'].' </p></b>');
  echo('<input type="text" name="fuel" placeholder="enter fuel to update">');
  
  echo(' <br>');
  echo('Options:');
  echo('<b><p id="color" class="flabel">'.$row['options'].' </p></b>');
  echo('<input type="text" name="opt" placeholder="enter options to update">');
  
  echo(' <br>');
  echo('Price:');
  echo('<b><p  id="color" class="flabel">'.$row['price'].' </p></b>');
  echo('<input type="text" name="price" placeholder="enter price to update">');
  
  echo('<br>');
  echo('  <br>');
echo('<div class="frow-wraper" >');
echo('<input type="submit" class=" saveButton" style="width:100px" value="Update" />');
echo('</div>');
echo('</div>'); 
echo('</div>');

$name3=$row['name'];
$stockno3=$row['stockno'];
$make3=$row['make'];
$model3=$row['model'];
$chassis3=$row['chassisno'];
$color3=$row['color'];
$sstatus3=$row['stockstatus'];
$year3=$row['year'];
$trans3=$row['transmission'];
$ecapacity3=$row['enginecapacity'];
$fuel3=$row['fuel'];
$options3=$row['options'];
$price3=$row['price'];
$pict1=$row['image1'];
$pict2=$row['image2'];
$pict3=$row['image3'];
$pict4=$row['image4'];
$vehicalstatus=$row['status'];

$_SESSION["vname"]=$name3;
$_SESSION["vstockno"]=$stockno3;
$_SESSION["vmake"]=$make3;
$_SESSION["vmodel"]=$model3;
$_SESSION["vchassisno"]=$chassis3;
$_SESSION["vcolor"]=$color3;
$_SESSION["vstockstatus"]=$sstatus3;
$_SESSION["vyear"]=$year3;
$_SESSION["vtransmission"]=$trans3;
$_SESSION["venginecapacity"]=$ecapacity3;
$_SESSION["vfuel"]=$fuel3;
$_SESSION["voptions"]=$options3;
$_SESSION["vprice"]=$price3;
$_SESSION["vphoto1"]=$pict1;
$_SESSION["vphoto2"]=$pict2;
$_SESSION["vphoto3"]=$pict3;
$_SESSION["vphoto4"]=$pict4;
$_SESSION["vvehiclestatus"]=$vehicalstatus;
}
 }
?>
</form> 

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
<script>
function changepic(){
//	var y = $('#large-image img').attr(src);
//	var x = $('#small-image2 img').attr('src');
	var image = document.getElementById('small-image1');
	image.src;
	
	var lgimage = document.getElementById('large-image');
	lgimage.src=image.src;
//	var temp;
//	temp=y;
//	x=y;
//	y=temp;
	
//	$('#large-image').attr('src', x);
}
 

</script>
</body>
</html>