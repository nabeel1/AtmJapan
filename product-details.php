<?php require("dbconnection.php"); ?>
<?php if(!(isset($_SESSION['logged_in']) || isset($_SESSION['adminlogged_in'])) )
{
//Header('Location:index.php');
//exit;
}
?>

<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">


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

$pid=$_GET['id'];
 
 
?>

<?php
$sql="select * from vehicles where id='$pid' ";
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
<a id="bookproduct" class="btn btn-primary" data-toggle="modal" data-target="#modal-2" >Book this Product</a>
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
 
 $(".adimage-thumbnail").mouseenter(function () {
                var temp = $(this).attr("src");
                $("#large-image").attr("src", temp);
            });
</script>



<!-- Start of modal code -->
<div class="modal fade " id="modal-2">
<div class="modal-dialog">
<div class="modal-content">
<div  class="modal-header">
<button type="button" class="close" data-dismiss="modal" > &times;</button>
<h3 class="modal-title">Product Booking </span></h3>
</div>
<div class="modal-body">
<form action="booking.php" method="post" >
<div class="form-group-lg has-success">
<input class="form-control" name="stocknumber" type="text" placeholder="Enter stock number" readonly  value="<?php echo($stockno);?>" required>
</div>
<br>
<div class="form-group-lg has-success">
<input class="form-control" name="yourname" type="text" placeholder="Enter your name" required>
</div>
<br>
<div class="form-group-lg has-success">
<input class="form-control" name="contactno" type="text" placeholder="Enter Contact number" required>
</div>
<br>
<div class="form-group-lg has-success">
<input class="form-control" name="email" type="email" placeholder="Enter Email Address" required>
</div>
<br>
<button id="sign-in" class="btn btn-lg btn-primary center-block" type="submit">Book it  </button>

</form>
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>

<!-- end of modal code -->


</body>
</html>