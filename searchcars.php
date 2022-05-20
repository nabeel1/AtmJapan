<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Bootstrap/stylesheet.css">
<link rel="icon" type="image/png" href="Images/hlogo.png" sizes="16x16">
<title>ATMJapan</title>
</head>

<body>
<!-- header start --> 
<?php include("header.php"); ?>
<!-- header end -->  

<div class="container-fluid" style=" margin-top:60px;"> 

<div  class="row">
<div class="col-xs-offset-1 col-sm-10">
<h1 class="text-center " style="color:#333333;"> Search Car </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115);">
<p><span class="glyphicon glyphicon-search" > Search Vehicles </span> </p>
<hr>
  <form action="#" method="post" enctype="multipart/form-data" role="form" >
 <div class="row">
 <div class="col-xs-offset-1 col-md-5"> 
 
  <div class="main-flabel-wraper">
  <label for="name" class="flabel">Name:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="name" name="name"  style="width:200px">
 <option value="0"> Car name </option>
 <option value="1">Allion</option>
<option id="2" > Belta </option>
<option id="3"> Camry </option>
<option id="4"> Celica </option>
<option id="5"> Estima Hybrid </option>
<option id="6"> Land Cruiser</option>
<option id="7"> Passo </option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
<label for="maker" class="flabel">Maker:</label>
</div>
 <div class="main-fcontrol-wraper">
 <select id="maker" name="maker"  style="width:200px">
 <option value="0"> Makes </option>
 <option value="1">Mitsubishi</option>
<option id="2" > NISSAN </option>
<option id="3"> MAZDA </option>
<option id="4"> SUZUKI </option>
<option id="5"> KIA </option>
<option id="6"> BMW </option>
<option id="7"> TOYOTA </option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="model" class="flabel">Model:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="model" name="model"  style="width:200px">
 <option value="0"> Models </option>
 <option value="1">Mitsubishi</option>
<option id="2" > NISSAN </option>
<option id="3"> MAZDA </option>
<option id="4"> SUZUKI </option>
<option id="5"> KIA </option>
<option id="6"> BMW </option>
<option id="7"> TOYOTA </option>
</select>
</div>

<div id="clear-sec"></div>


<div class="main-flabel-wraper">
  <label for="color" class="flabel">Color:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="color" name="color"  style="width:200px">
 <option value="0"> Color</option>
 <option value="1">Mitsubishi</option>
<option id="2" > NISSAN </option>
<option id="3"> MAZDA </option>
<option id="4"> SUZUKI </option>
<option id="5"> KIA </option>
<option id="6"> BMW </option>
<option id="7"> TOYOTA </option>
</select>
</div>

<div id="clear-sec"></div>



<div class="main-flabel-wraper">
  <label for="remarks" class="flabel">Remarks:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="remarks" name="remarks"  style="width:200px">
 <option value="0">Remarks</option>
 <option value="1">Good</option>
<option id="2" > Fine </option>
<option id="3" > Execelent </option>
</select>
</div>

<div id="clear-sec"></div>

    <div id="clear-sec"></div>
<br>
<br>
<br>
<div class="frow-wraper">
<input id="saveButton" type="submit" class="btn btn-primary" style="width:100px" value="Search" />
<input id="cancelButton" type="submit" class="btn btn-primary" style="width:100px" value="Reset" />
</div>
</div><!-- inside form 1st col end-->
<div class="col-md-5"> <!-- inside form 2nd col strt-->

<div class="main-flabel-wraper">
  <label for="year" class="flabel">Year:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="year" name="year"  style="width:200px">
 <option value="0"> Color</option>
 <option value="1">Mitsubishi</option>
<option id="2" > NISSAN </option>
<option id="3"> MAZDA </option>
<option id="4"> SUZUKI </option>
<option id="5"> KIA </option>
<option id="6"> BMW </option>
<option id="7"> TOYOTA </option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
<label for="transmission" class="flabel">Transmission:</label>
</div>
 <div class="main-fcontrol-wraper">
 <select id="transmission" name="transmission"  style="width:200px">
 <option value="0"> Transmission </option>
 <option value="1"> Manual </option>
 <option value="2">Automatic</option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="enginecapacity" class="flabel">Engine Capacity:</label>
    </div>
    
<div class="main-fcontrol-wraper">
 <select id="enginecapacity" name="enginecapacity"  style="width:200px">
 <option value="0"> 1000 CC </option>
 <option value="1">1500CC</option>
<option id="2" > 1800CC </option>
<option id="3"> 2000 CC </option>
<option id="4"> 2500 CC </option>
<option id="5"> 4000 CC </option>
</select>
</div>

<div id="clear-sec"></div>


<div class="main-flabel-wraper">
  <label for="fuel" class="flabel">Fuel:</label>
    </div>
    
<div class="main-fcontrol-wraper">
 <select id="fuel" name="fuel"  style="width:200px">
 <option value="0"> Fuel </option>
 <option value="1">Petrol</option>
<option id="2" > Diesel </option>
<option id="3"> Electric </option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="Price" class="flabel">Price:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<select id="Price" name="Price"  style="width:200px">
 <option value="0"> price </option>
 <option value="1">$200</option>
<option id="2" > $300 </option>
<option id="3"> $400</option>
<option id="4"> $500</option>
<option id="5"> $600</option>
<option id="6"> $700</option>
<option id="7"> $800</option>
<option id="8"> $900</option>
<option id="9"> $900</option>
<option id="10"> $1000</option>
<option id="11"> $1500</option>
<option id="12"> $2000</option>
<option id="13"> $2500</option>
<option id="14"> $3000</option>
<option id="15"> $3500</option>
<option id="16"> $4000</option>
<option id="17"> $4500</option>
<option id="18"> $5000</option>
<option id="19"> $5000</option>
</select>
</div>

<div id="clear-sec"></div>

</div><!-- inside form 2nd col end-->
</div><!--inside form row end-->
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
<script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
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
</body>
</html>
