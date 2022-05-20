<?php require("dbconnection.php"); ?>
<?php if(!isset($_SESSION['adminlogged_in']))
{
Header('Location:admin.php');

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
<h1 class="text-center " style="color:#333333;  margin-top:-60px;"> Car Add Form </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115); margin-top:15px;">

  <form action="addvehicle.php" method="post" enctype="multipart/form-data" role="form" >
 <div class="row">
 <div class="col-xs-offset-1 col-md-5"> 
 
  <div class="main-flabel-wraper">
  <label for="name" class="flabel">Name:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="name" name="name" type="text"  style="width:200px"  required/>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="stock#" class="flabel">Stock#</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="stock#" name="stock#" type="text"  style="width:200px"  required/>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
<label for="maker" class="flabel">Maker:</label>
</div>
 <div class="main-fcontrol-wraper">
 <input id="maker" name="maker" type="text"  style="width:200px" required />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="model" class="flabel">Model:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="model" name="model" type="text"  style="width:200px" required />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="chassisnumber" class="flabel">Chassis Number:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="chassisnumber" name="chassisnumber" type="text"  style="width:200px"  required/>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="color" class="flabel">Color:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="color" name="color" type="text"  style="width:200px" required />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="stockstatus" class="flabel">Stock Status:</label>
    </div>
    
<div class="main-fcontrol-wraper">

<select id="stockstatus" name="stockstatus"  style="width:200px" required >
 <option value="Available"> Available </option>
 <option value="Sold">Sold</option>
</select>
</div>

<div id="clear-sec"></div>


<div id="clear-sec"></div>

<br>
<br>
<br>
<div class="frow-wraper">
<input id="saveButton" type="submit" class="btn btn-primary" style="width:100px" value="Submit" />

<input id="saveButton" type="reset" class="btn btn-primary" style="width:100px" value="Reset" />


</div>
</div><!-- inside form 1st col end-->
<div class="col-md-5"> <!-- inside form 2nd col strt-->

<div class="main-flabel-wraper">
  <label for="year" class="flabel">Year:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="year" name="year" type="text"  style="width:200px" />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
<label for="transmission" class="flabel">Transmission:</label>
</div>
 <div class="main-fcontrol-wraper">
 <select id="transmission" name="transmission"  style="width:200px" required >
 <option value="Manual"> Manual </option>
 <option value="Automatic">Automatic</option>
</select>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="enginecapacity" class="flabel">Engine Capacity:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="enginecapacity" name="enginecapacity" type="text"  style="width:200px" required />
</div>

<div id="clear-sec"></div>


<div class="main-flabel-wraper">
  <label for="fuel" class="flabel">Fuel:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="fuel" name="fuel" type="text"  style="width:200px" required />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="options" class="flabel">Options:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="options" name="options" type="text"  style="width:200px"  />
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
  <label for="pprice" class="flabel">Price Yen:</label>
    </div>
    
<div class="main-fcontrol-wraper">
<input id="pprice" name="price" type="text" min="0" style="width:200px" required/>
</div>

<div id="clear-sec"></div>

<div class="main-flabel-wraper">
<label for="description" class="flabel">Images:</label>
</div>
<div class="main-fcontrol-wraper" >
<input id="photo1" name="photo1" type="file" required />
<input id="photo2" name="photo2" type="file" />
<input id="photo3" name="photo3" type="file" />
<input id="photo4" name="photo4" type="file" />
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

<script src="Bootstrap/js/bootstrap.min.js"></script>
<script 
src="https://www.bootstrapskins.com/google-maps-authorization.js?id=1c150919-c678-1a10-c97a-f597084f6f83&c=google-maps-code&u=1450373278" defer async>
</script>

</body>
</html>