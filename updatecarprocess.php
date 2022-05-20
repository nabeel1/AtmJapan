<?php require("dbconnection.php");

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

//require("dbconnection.php");
function inputvalues($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$vvid=$_SESSION["searchidforcar"];
$cname=$_SESSION["vname"];
$cstockno=$_SESSION["vstockno"];
$cmake=$_SESSION["vmake"];
$cmodel=$_SESSION["vmodel"];
$cchassis=$_SESSION["vchassisno"];
$ccolor=$_SESSION["vcolor"];
$cstockstatus=$_SESSION["vstockstatus"];
$cyear=$_SESSION["vyear"];
$ctransmission=$_SESSION["vtransmission"];
$cenginecapacity=$_SESSION["venginecapacity"];
$cfuel=$_SESSION["vfuel"];
$coptions=$_SESSION["voptions"];
$cprice=$_SESSION["vprice"];
$cphoto1=$_SESSION["vphoto1"];
$cphoto2=$_SESSION["vphoto2"];
$cphoto3=$_SESSION["vphoto3"];
$cphoto4=$_SESSION["vphoto4"];
$cvehicalstatus=$_SESSION["vvehiclestatus"];

$newname=inputvalues($_POST['name']);
$newstockno=inputvalues($_POST['stockno']);
$newmake=inputvalues($_POST['make']);
$newmodel=inputvalues($_POST['model']);
$newchassis=inputvalues($_POST['chassisno']);
$newcolor=inputvalues($_POST['color']);
$newstockstatus=inputvalues($_POST['stockstatus']);
$newyear=inputvalues($_POST['year']);
$newtransmission=inputvalues($_POST['transmission']);
$newenginecapacity=inputvalues($_POST['ecap']);
$newfuel=inputvalues($_POST['fuel']);
$newoptions=inputvalues($_POST['opt']);
$newprice=inputvalues($_POST['price']);
/*
$newphoto1=inputvalues($_POST['photo1']);
$newphoto2=inputvalues($_POST['photo2']);
$newphoto3=inputvalues($_POST['photo3']);
$newphoto4=inputvalues($_POST['photo4']);
*/
if($newname== NULL){
	$newname=$cname;
}

if($newstockno== NULL){
	$newstockno=$cstockno;
}
if($newmake== NULL){
	$newmake=$cmake;
}
if($newmodel== NULL){
	$newmodel=$cmodel;
}
if($newchassis== NULL){
	$newchassis=$cchassis;
}
if($newcolor== NULL){
	$newcolor=$ccolor;
}
if($newstockstatus== NULL){
	$newstockstatus=$cstockstatus;
}
if($newyear== NULL){
	$newyear=$cyear;
}
if($newtransmission== NULL){
	$newtransmission=$ctransmission;
}
if($newenginecapacity== NULL){
	$newenginecapacity=$cenginecapacity;
}
if($newfuel== NULL){
	$newfuel=$cfuel;
}
if($newoptions== NULL){
	$newoptions=$coptions;
}
if($newprice== NULL){
	$newprice=$cprice;
}
if($photo1==NULL){
$photo1=$cphoto1;	
}
if($photo2==NULL){
	$photo2=$cphoto2;
}
if($photo3==NULL){
	$photo3=$cphoto3;
}
if($photo4==NULL){
	$photo4=$cphoto4;	
}


$id=$_SESSION['searchidforcar'];

$mysql="UPDATE vehicles set 
name='$newname',stockno='$newstockno',make='$newmake',model='$newmodel',chassisno='$newchassis',color='$newcolor',stockstatus='$newstockstatus',year='$newyear',transmission='$newtransmission',enginecapacity='$newenginecapacity',fuel='$newfuel',options='$newoptions',price='$newprice',image1='$photo1',image2='$photo2',image3='$photo3',image4='$photo4',status='$cvehicalstatus' where stockno='$id'";

mysql_query($mysql);
header("Location:updatecars.php");

?>