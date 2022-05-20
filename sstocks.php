<?php require("dbconnection.php");
if(!(isset($_SESSION['logged_in']) || isset($_SESSION['adminlogged_in'])) )
{
//Header('Location:index.php');
//exit;
}
?>
<?php 
$limit = 30;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$pmake=$_GET['make'];

$sql = "SELECT * FROM vehicles where make='$pmake' and status='unbooked' order by id desc LIMIT $start_from, $limit ";  
$rs_result = mysql_query($sql);
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
<script src="Bootstrap/js/bootstrap.min.js"></script>
<title>ATMJapan</title>
</head>

<body>
<!-- header start --> 
<?php include("header.php"); ?>
<!-- header end --> 



<div class="container" style=" margin-top:90px;"> 
 <div class="row">
 <form action="stock.php" method="post" role="form" >
 
 
  
  <label for="name" class="flabel">Stock number:</label>
  
    

<input style="width:130px; height:30px; margin-bottom:2px" id="name" name="stockno" type="text" required/>

<input id="name" value="Search" type="submit" class="btn btn-primary btn-sm" style="width:70px; margin-top:-2px; margin-bottom:2px" />


</form>
</div>



<?php

while($row=mysql_fetch_assoc($rs_result)){
	
echo('<div class="col-md-10 well" >'); 

echo('<div class="row">'); 

echo('<div class="col-md-2" >'); 
echo('<img class="img-circle" src='.$row['image1'].' width="150px" height="120px">'); 
echo('</div>');

echo('<div class="col-md-2" >'); 
 echo('<table  class="table table-striped">');
    echo('<thead>'); 
     echo(' <tr>');
        echo('<th> Stock#: </th>');
        echo('<th>'.$row['stockno'].'</th>');
      echo('</tr>');
    echo('</thead>');
    echo('<tbody>');
      echo('<tr>');
        echo('<td>Maker:  </td>');
        echo('<td>'.$row['make'].'</td>');
        
      echo('</tr>');
      echo('<tr>');
        echo('<td>Model:</td>');
        echo('<td>'.$row['model'].'</td>');
       
       
 echo('     </tr>');
     echo(' <tr>');
        echo('<td>Year/Month:</td>');
        echo('<td>'.$row['year'].'</td>');
      echo('</tr>');
    echo('</tbody>');
  echo('</table>'); 
  
echo(' </div>');
 
echo('<div class="col-md-3">');

echo(' <table class="table table-striped">');
    echo('<thead>');

      echo('<tr>');
        echo('<th> Chassis#: </th>');
        echo('<th>'.$row['chassisno'].'</th>');
      echo('</tr>');
echo('    </thead>');
    echo('<tbody>');
      echo('<tr>');
        echo('<td>Engine: </td>');
        echo('<td>'.$row['enginecapacity'].'</td>');
        
      echo('</tr>');
      echo('<tr>');
        echo('<td>Transmission:</td>');
        echo('<td>'.$row['transmission'].'</td>');
       
       
      echo('</tr>');
      echo('<tr>');
        echo('<td>Color:</td>');
        echo('<td>'.$row['color'].'</td>');
  
      echo('</tr>');
    echo('</tbody>');
  echo('</table>');
  echo('</div>');

echo('<div class="col-md-2" >'); 
echo('<table  class="table table-striped">');
    echo('<thead>'); 
      echo('<tr>');
        echo('<th align="center">&nbsp;   </th>');
      echo('</tr>');
    echo('</thead>');
    echo('<tbody>');
    echo('<tr>');
     echo('<td align="center" >PRICE &yen; </td>');
      echo('</tr>');
      
     echo('<tr> <td align="center"> '.$row['price'].' </td> </tr>');
     echo('<tr> <td align="center">&nbsp; </td> </tr>');
     echo('<tr> <td> </td> </tr>');
    echo('</tbody>');
  echo('</table>'); 
 echo('</div>');

echo('<div class="col-md-1" >');
echo('<table  class="table table-striped">');
    echo('<thead>'); 
      echo('<tr>');
        echo('<th align="center">&nbsp;</th>');
      echo('</tr>');
    echo('</thead>');
    echo('<tbody>');
    
     echo('<tr>'); 
     echo('<td align="center">'.$row['stockstatus'].'</td>');
     echo('</tr>');
     echo('<tr>'); 
     echo('<td align="center">--</td>');
     echo('</tr>');
     echo('<tr>'); 
     echo('<td align="center">--</td>');
     echo('</tr>');
    echo('</tbody>');
  echo('</table>'); 
 
echo(' </div>');

echo('<div class="col-md-1"  >');

echo(' <table  class="table table-striped">');
    echo('<thead> ');
      echo('<tr>');
        echo('<th align="center">&nbsp; 
         </th>');
      echo('</tr>');
    echo('</thead>');
    echo('<tbody>');
    
     echo('<tr>'); 
     echo('<td >');
	 echo('<a href="product-details.php?id='.$row['id'].'" style="margin-top:10px;" class="btn  btn-primary"> More Details  </a>');
	 echo(' </td>');
     echo('</tr>'); 
     echo('<tr> <td>&nbsp;   </td> </tr>');
     
    echo('</tbody>');
  echo('</table>'); 
  echo('</div>');

echo('</div>');
echo('</div>'); 

}
?>


</div>



<?php  
$sql = "SELECT COUNT(id) FROM vehicles";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='sstocks.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>



<!--start of footer -->
<?php include("footer.php");?>
<!-- end of footer -->

<!-- Latest compiled and minified JavaScript -->

<script 
src="https://www.bootstrapskins.com/google-maps-authorization.js?id=1c150919-c678-1a10-c97a-f597084f6f83&c=google-maps-code&u=1450373278" defer async>
</script>

</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'sstocks.php?page='
    });
	});
</script>