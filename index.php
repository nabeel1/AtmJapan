<?php require("dbconnection.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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


<div class="container-fluid"> 

<div id="myCarousel" class="carousel" style="padding:10px; padding-bottom:45px; margin-top:90px"> <!--section start-->
<div class="row"> 
<div class=" col-md-1 col-sm-1"> </div>

<div class="col-md-4 col-sm-4">


<table id="time-table"  class="table table-responsive">
    <thead>
    <tr>
        <th>&nbsp;  </th>
        <th>&nbsp;</th>
      </tr> 
      <tr>
        <th> Operating Hours </th>
        <th>9.00am - 6.30pm</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>WeekDays  </td>
        <td>[Mon-Fri]</td>
        
      </tr>
      <tr>
        <td>Weekends</td>
        <td>Closed</td>
       
       
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
 </div>
<div class="col-md-4 col-sm-4"> 
</div>
<div class="col-md-3 col-sm-3"> 

</div>

</div>

</div>
<!-- Section end-->

<div id="after-section"><!--after-section start-->
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8"> 
<!--<div class="btn-group-md  btn-group" >
  <button type="" style="width:145px;" class="btn btn-info">Special offer</button>
  <button type="button" style="width:145px;" class="btn btn-info">New Brand</button>
  <button type="button" style="width:145px;" class="btn btn-info">Stock List</button>
  <button type="button" style="width:145px;" class="btn btn-info">order History</button>
  <button type="button" style="width:145px;" class="btn btn-info">Shipping Shedule</button>
  <button type="button" style="width:145px;" class="btn btn-info">Freight Rates</button>
</div>-->
<div class="col-md-2">
</div>
</div>
</div>
<!--
<div id="form" class="row" >
<div class="col-xs-3"> </div>

<div class="col-md-8" style="">


</div>
<div class="col-md-2"> </div>
</div>
<div style="margin-left:225px;">
 <img src="Images/KobeMotor_NewsDesk.png" alt="Newsdesk" style="margin:5px;" > 
</div>-->
</div><!-- content after-section end-->

<div class="container-fluid" style="padding-top:0px;"> <!--first jumbotron start-->

<div class="row">
 <marquee style="color:#000000; font-weight:bold">You must be logged in, to book the product after your account gets activated.</marquee>

<!--<div class="col-sm-1"></div>-->
<div class="col-md-2" >
<div id="modals-list"  > 

<div style="background-color:#000; border-top:none; font-size:18px;  color:#FFF;">&nbsp;&nbsp; Search by Make  </div>

<div> <a href="sstocks.php?make=toyota"> <img src="Images/models logo/images.jpg" width="45px" height="29px"> Toyota </a>  </div> 
<div> <a href="sstocks.php?make=nissan"> <img src="Images/models logo/nissan_brand_logo.jpg" width="45px" height="29px"> Nissan </a>  </div> 
<div> <a href="sstocks.php?make=mazda"> <img src="Images/models logo/mazda_emblem_98.jpg" width="45px" height="29px"> Mazda </a>  </div> 
<div> <a href="sstocks.php?make=Honda"> <img src="Images/models logo/honda.jpg" width="45px" height="29px"> Honda </a>  </div> 
<div> <a href="sstocks.php?make=suzuki"> <img src="Images/models logo/1332912756492407460logo_suzuki-md.png" width="45px" height="29px"> Suzuki </a>  </div> 
<div> <a href="sstocks.php?make=mitsubishi"> <img src="Images/models logo/car_logo_PNG1656.png" width="45px" height="29px"> Mitsubishi </a>  </div> 
<div> <a href="sstocks.php?make=BMW"> <img src="Images/models logo/BMW_logo.png" width="45px" height="29px"> BMW </a>  </div> 
<div> <a href="sstocks.php?make=Audi"> <img src="Images/models logo/car_logo_PNG1640.png" width="45px" height="29px"> Audi </a>  </div> 
<div> <a href="sstocks.php?make=UD"> <img src="Images/models logo/UD_Nissan_Diesel_trucks_logo.png" width="45px" height="29px"> UD </a>  </div> 
<div> <a href="sstocks.php?make=volvo"> <img src="Images/models logo/Volvo-Logo-2.jpg" width="45px" height="29px"> volvo </a>  </div> 
<div> <a href="sstocks.php?make=Subaru"> <img src="Images/models logo/car_logo_PNG1669.png" width="45px" height="29px"> Subaru </a>  </div> 
<div> <a href="sstocks.php?make=Isuzu"> <img src="Images/models logo/Isuzu-Logo.jpg" width="45px" height="29px"> Isuzu </a>  </div> 
<div> <a href="sstocks.php?make=Hyundai"> <img src="Images/models logo/car_logo_PNG1645.png" width="45px" height="29px"> Hyundai </a>  </div> 
<div> <a href="sstocks.php?make=Peugeot"> <img src="Images/models logo/Peugeot-logo-lion.png" width="45px" height="29px"> Peugeot </a>  </div> 
<div> <a href="sstocks.php?make=Mercedes"> <img src="Images/models logo/car_logo_PNG1655.png" width="45px" height="29px"> Mercedes </a>  </div> 
<div> <a href="sstocks.php?make=Land Rover"> <img src="Images/models logo/Land-Rover-Logo-PNG-03497.png" width="45px" height="29px"> Land Rover </a>  </div> 
<div> <a href="sstocks.php?make=Porsche"> <img src="Images/models logo/car_logo_PNG1663.png" width="45px" height="29px"> Porsche </a>  </div> 
<div> <a href="sstocks.php?make=Volkswagen"> <img src="Images/models logo/1026px-Volkswagen_Logo.png" width="45px" height="29px"> Volkswagen </a>  </div> 
<div> <a href="sstocks.php?make=Ford"> <img src="Images/models logo/1280px-Ford_Motor_Company_Logo.svg.png" width="45px" height="29px"> Ford </a>  </div> 
<div> <a href="sstocks.php?make=Lexus"> <img src="Images/models logo/Lexus-logo.png" width="45px" height="29px"> Lexus </a>  </div> 
<div> <a href="sstocks.php?make=Daihatsu"> <img src="Images/models logo/logo-daihatsu.png" width="45px" height="29px">Daihatsu </a>  </div> 
<div> <a href="sstocks.php?make=Hino"> <img src="Images/models logo/Hino-logo-1.png" width="45px" height="29px"> Hino </a>  </div> 
<div> <a href="sstocks.php?make=Gm"> <img src="Images/models logo/003_GM.png" width="45px" height="29px"> Gm </a>  </div> 
<div> <a href="sstocks.php?make=Rover"> <img src="Images/models logo/Rover_logo.png" width="45px" height="29px"> Rover </a>  </div> 
<div> <a href="sstocks.php?make=Alfa Romeo"> <img src="Images/models logo/car_logo_PNG1639.png" width="45px" height="29px"> Alfa Romeo </a>  </div> 
<div> <a href="sstocks.php?make=Jaguar"> <img src="Images/models logo/car_logo_PNG1647.png" width="45px" height="29px"> Jaguar</a>  </div> 
<div> <a href="sstocks.php?make=Chrysler Jeep"> <img src="Images/models logo/jeep-emblem.png" width="45px" height="29px"> Chrysler Jeep </a>  </div> 
<div> <a href="sstocks.php?make=Kia"> <img src="Images/models logo/car_logo_PNG1649.png" width="45px" height="29px"> Kia </a>  </div> 
<div> <a href="sstocks.php?make=Smart"> <img src="Images/models logo/2000px-Smart_logo.svg.png" width="45px" height="29px"> Smart </a>  </div> 
<div> <a href="sstocks.php?make=Ssangyong"> <img src="Images/models logo/ssangyong.png" width="45px" height="29px"> Ssangyong </a>  </div> 
<div> <a href="sstocks.php?make=Mini"> <img src="Images/models logo/Mini-logo.png" width="45px" height="29px">Mini </a>  </div> 
<div> <a href="sstocks.php?make=Maserati"> <img src="Images/models logo/Maserati_logo.png" width="45px" height="29px"> Maserati </a>  </div> 
<div> <a href="sstocks.php?make=Infiniti"> <img src="Images/models logo/Infiniti_logo.png" width="45px" height="29px"> Infiniti </a>  </div> 
<div> <a href="sstocks.php?make=Europe Ford"> <img src="Images/models logo/1280px-Ford_Motor_Company_Logo.svg.png" width="45px" height="29px"> Europe Ford </a>  </div> 
<div> <a href="sstocks.php?make=Chrysler"> <img src="Images/models logo/CHRYSLER.png" width="45px" height="29px"> Chrysler </a>  </div> 

</div>
 </div> <!--model list end-->
 
 <?php 

$sql = "SELECT * FROM vehicles where status='unbooked' order by id desc LIMIT 9";  
$rs_result = mysql_query($sql);
?>
<div id="new-arival" style="padding:10px; padding-bottom:45px; ">

</div>


<?php


while($row=mysql_fetch_assoc($rs_result)){
	


echo('<div class="col-sm-6 col-md-3">');
echo('<div class="thumbnail">');

echo('<img style="height:150px;"  src='.$row['image1'].' alt="product image here" class="img-responsive img-thumbnail"/>');
echo('<div class="caption">');
echo('<h4>'.$row['name'].'</h4>');
echo('<p><a href="product-details.php?id='.$row['id'].'" class="btn btn-primary" role="button">More Details</a><span class="pull-right"> ¥ '. $row['price'] .' </span></p>');
echo('</div>');


echo('</div>');
echo('</div>');

}



?>

<div class="col-md-10 well" id="slogan" style="margin-top:20px;">

<div class="row">
<div class="col-sm-12">
<h2 class="text-center">About Us</h2>
</div>
</div>
<div class="row ">
<div id="aboutus" class=" col-xs-offset-1 col-sm-10 col-xs-offset-1 page-header">
<p align="justify" > 
Welcome to ATM MARKETING CO LTD. For more than a decade now we have been exporting high quality Japanese used vehicles including cars, bus, trucks and machinery/cranes to Russia, Caribbean, South America, Africa, and South Asia at competitively low prices. We have expanded and grown to continuously export more than 1000 vehicles a month worldwide serving to well over 35 countries in 5 different continents, now a truly global company.
Constantly, there are more than 2000 vehicles in our stock. Please visit www.atmjapan.com to see our stock and take advantage of our special discount offers for customers willing to buy in bulk.
We have a dedicated and secure online customer accounting system to check on order history, photographs, account statement and other paperwork hassle-free.
Call us today, our professional sales team speaks over 15 different languages would be able to assist you in finding the vehicle of your choice.
You cannot find the vehicle you want in our stock? Don’t worry.
We offer free online access to browse auctions that includes all of the auction houses in Japan through our
website. Once the bid is placed through our system, our specialized auction staff will check the auction sheet
for defects. We would then proceed to bid directly in the auction for your choice of vehicle, on behalf of you.
ATMJapan Company is a member of the most reputabl JUMVEA (Japan Used Motor Vehicle Exporters
Association) in the Japanese used car export industry.
ATMJapan Company is a Gold Member of all Japanese auctions.
Call us today. Visit our Website. Don’t waste another minute!
</p>
</div>
</div>
 </div>
 
 
 
</div> <!--first jumbotron end-->





</div> <!-- Main container-fluid end-->







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