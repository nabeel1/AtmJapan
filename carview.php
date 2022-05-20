<?php require("dbconnection.php");

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
<?php include("header.php"); ?>

<?php
$vid=$_GET['id'];

$sql="select * from vehicles where stockno='$vid' ";
$resultset=mysql_query($sql);

while($row=mysql_fetch_array($resultset)){
	
$ii=$row['id'];
$name=$row['name'];
$stockno=$row['stockno'];
$make=$row['make'];
$model= $row['model'] ;
$chassisno= $row['chassisno'];
$color=$row['color'];
$stockstatus= $row['stockstatus'];
$remarks=$row['remarks'];
$year=$row['year'];
$transmission=$row['transmission'];
$enginecapacity=$row['enginecapacity'];
$fuel=$row['fuel'];
$options=$row['options'];
$price=$row['price'];
$photo1=$row['image1'];
$photo2=$row['image2'];
$photo3=$row['image3'];
$photo4=$row['image4'];	
}

?>

<div class="container" style="background-color:#CCF;"> 

<h1 class="ptext " style="color:#333333;margin-top:90px; "><b>Details</b>

</h1>




<!-- Display image work-->
<div>
<div class="row">
 <div class=" col-md-2"> </div>
<div class=" col-md-10">
<img id="large-image" src='<?php echo($photo1);?>' class="img-thumbnail" height="480" width="640" >
<br>
<div style="margin-left:30px;">
<a href="#"><img id="small-image1"  class="img-rounded adimage-thumbnail " src='<?php echo($photo1);?>' height="84" width="112" ></a>
<a href="#"><img id="small-image2"  class="img-rounded adimage-thumbnail" src='<?php echo($photo2);?>' height="84" width="112" ></a>
<a href="#"><img id="small-image3" class="img-rounded adimage-thumbnail" src='<?php echo($photo3);?>' height="84" width="112" ></a>
<a href="#"><img id="small-image4" class="img-rounded adimage-thumbnail" src='<?php echo($photo4);?>' height="84" width="112" ></a>


 </div>
 </div>
</div>

</div>
<!-- Display image work end-->
<div class="row" style="margin-top:30px;">
<div class=" col-xs-offset-1 col-md-11"> 

<label id="car-name" for="car-name" > <?php echo($name);?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</div> 
<div  class="row" style="margin-bottom:20px;">
<div  class="col-xs-offset-1 col-md-4 ">

<hr>
<label id="stocknmbr" for="stocknumber" >Stock Number</label>
<label class="pull-right" id="stocknmbr" name="stocknumber" ><?php echo($stockno);?></label>
<hr>
<label id="maker" for="maker" >Maker</label> 
<label class="pull-right" id="maker" name="maker" ><?php echo($make);?></label>
<hr>
<label id="model" for="model" >Model</label> 
<label class="pull-right" id="model" name="model" ><?php echo($model);?></label>
<hr>
<label id="chassusnumber" for="chassusnumber" >Chassis Number</label> 
<label class="pull-right" id="chassusnumber" name="chassusnumber" >	<?php echo($chassisno);?></label>
<hr>
<label id="color" for="color" >Color</label> 
<label class="pull-right" id="color" name="color" ><?php echo($color);?></label>
<hr>
<label id="stockstatus" for="stockstatus" >Stock Status</label> 
<label class="pull-right" id="stockstatus" name="stockstatus" ><?php echo($stockstatus);?></label>
<hr>
</div>
<div class=" col-md-1 "> </div>

<div  class="col-md-4"> 

<hr>
<label id="yearmonth" for="yearmonth" >Year/Month</label>
 <label class="pull-right" id="yearmonth" for="yearmonth" ><?php echo($year);?></label>
<hr>
<label id="transmission" for="transmission" >Transmission</label> 
<label class="pull-right" id="transmission" for="transmission" ><?php echo($transmission);?></label>
<hr>
<label id="enginecapacity" for="enginecapacity" >Engine Capacity</label>
 <label class="pull-right" id="enginecapacity" for="enginecapacity" ><?php echo($enginecapacity);?></label>
<hr>
<label id="fuel" for="fuel" >Fuel</label> 
<label class="pull-right" id="fuel" for="fuel" ><?php echo($fuel);?></label>
<hr>
<label id="options" for="iptions" >options</label> 
<label class="pull-right" id="options" for="iptions" ><?php echo($options);?></label>
<hr>
<label id="price" for="price" >Price &yen;</label> 
<label class="pull-right" id="price" for="price" ><?php echo($price);?></label>
<hr>
</div>
</div>

</div>











<?php include("footer.php");?>
<!-- end of footer -->

<!-- Latest compiled and minified JavaScript -->

<script src="Bootstrap/js/bootstrap.min.js"></script>
<script 
src="https://www.bootstrapskins.com/google-maps-authorization.js?id=1c150919-c678-1a10-c97a-f597084f6f83&c=google-maps-code&u=1450373278" defer async>
</script>

</body>
</html>