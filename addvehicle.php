<?php 

//code for image uploading 

error_reporting(0);
// Get Current date and type
$dDateTime=date("Ymdhis");
// Check the directory 
if(!is_dir($sDirecorty))
{
	mkdir($sDirecorty,0777);
}
//File Extension
$sFileExt=$_FILES['photo1']['type'];
// File Size
$iFileSize=$_FILES['photo1']['size'];
$dFileSizeKByte=$iFileSize/1024;

if($dFileSizeKByte<=2048)
{
	// File Extension array
	$arrFilesExtension=array("image/jpeg","image/jpg","image/png","image/GIF","image/bmp");
	// Check File type in given array
	if(in_array($sFileExt,$arrFilesExtension))
	{
		// Make the file path
		$photo1="uploadedcars/vehicles/".$dDateTime.$_FILES['photo1']['name'];
		// Upload the File on desired location
		move_uploaded_file($_FILES['photo1']['tmp_name'],$photo1);
		
		
	}
	else
	{
		//echo("File extension invalid");
	}
}
else
{
	echo("Maximum size 2MB allowed");
}



//File Extension
$sFileExt1=$_FILES['photo2']['type'];
// File Size
$iFileSize1=$_FILES['photo2']['size'];
$dFileSizeKByte1=$iFileSize1/1024;

if($dFileSizeKByte1<=2048)
{
	// File Extension array
	$arrFilesExtension=array("image/jpeg","image/jpg","image/png","image/GIF","image/bmp");
	// Check File type in given array
	if(in_array($sFileExt1,$arrFilesExtension))
	{// Make the file path
		$photo2="uploadedcars/vehicles/".$dDateTime.$_FILES['photo2']['name'];
		// Upload the File on desired location
		move_uploaded_file($_FILES['photo2']['tmp_name'],$photo2);
		
		
	}
	else
	{
		//echo("File extension invalid");
	}
}
else
{
	echo("Maximum size 2MB allowed");
}
		
		
//File Extension
$sFileExt2=$_FILES['photo3']['type'];
// File Size
$iFileSize2=$_FILES['photo3']['size'];
$dFileSizeKByte2=$iFileSize2/1024;

if($dFileSizeKByte2<=2048)
{
	// File Extension array
	$arrFilesExtension=array("image/jpeg","image/jpg","image/png","image/GIF","image/bmp");
	// Check File type in given array
	if(in_array($sFileExt2,$arrFilesExtension))
	{// Make the file path
		$photo3="uploadedcars/vehicles/".$dDateTime.$_FILES['photo3']['name'];
		// Upload the File on desired location
		move_uploaded_file($_FILES['photo3']['tmp_name'],$photo3);
		
		
	}
	else
	{
		//echo("File extension invalid");
	}
}
else
{
	echo("Maximum size 2MB allowed");
}		
		
		
		
		
//File Extension
$sFileExt3=$_FILES['photo4']['type'];
// File Size
$iFileSize3=$_FILES['photo4']['size'];
$dFileSizeKByte3=$iFileSize3/1024;

if($dFileSizeKByte3<=2048)
{
	// File Extension array
	$arrFilesExtension=array("image/jpeg","image/jpg","image/png","image/GIF","image/bmp");
	// Check File type in given array
	if(in_array($sFileExt2,$arrFilesExtension))
	{// Make the file path
		$photo4="uploadedcars/vehicles/".$dDateTime.$_FILES['photo4']['name'];
		// Upload the File on desired location
		move_uploaded_file($_FILES['photo4']['tmp_name'],$photo4);
		
		
	}
	else
	{
		//echo("File extension invalid");
	}
}
else
{
	echo("Maximum size 2MB allowed");
}				
		
		
		
		
	



require("dbconnection.php");
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=inputvalues($_POST['name']);
$stockno=inputvalues($_POST['stock#']);
$make=inputvalues($_POST['maker']);
$model= inputvalues($_POST['model']) ;
$chassisno= inputvalues($_POST['chassisnumber']);
$color=inputvalues($_POST['color']);
$stockstatus=inputvalues( $_POST['stockstatus']);
$year=inputvalues($_POST['year']);
$transmission=inputvalues($_POST['transmission']);
$enginecapacity=inputvalues($_POST['enginecapacity']);
$fuel=inputvalues($_POST['fuel']);
$options=inputvalues($_POST['options']);
$price=inputvalues($_POST['price']);
$vehicalstatus="unbooked";


$sql121="insert into vehicles(name,stockno,make,model,chassisno,color,stockstatus,year,transmission,enginecapacity,fuel,options,price,image1,image2,image3,image4,status) values('$name','$stockno','$make','$model','$chassisno','$color','$stockstatus','$year','$transmission','$enginecapacity','$fuel','$options','$price','$photo1','$photo2','$photo3','$photo4','$vehicalstatus')";

$boolstatus=mysql_query($sql121);




}


header("Location:admin-form.php");
?>

