<script src="Bootstrap/dis/jquery.simplePagination.js"></script>
<link rel="stylesheet" href="Bootstrap/dis/simplePagination.css" />
<header>
<nav class="navbar navbar-inverse navbar-fixed-top" id="MyNavBar" >
<div class="container">
<div class="navbar-header" style="margin-top:35px">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.php" class="navbar-brand"><img src="Images/logo.png" style="margin-top:-40px"></a>
</div>
<?php if(!(isset($_SESSION['logged_in']) || isset($_SESSION['adminlogged_in'])) )
{ ?>
<script>
$(document).ready(function(){
         $("#signin").show();
		$("#signout").hide();
   $("#stocks").hide();
     $("#mybookings").hide();
	 $("#bookproduct").hide();
});
</script>
<?php }else if((isset($_SESSION['logged_in']) || isset($_SESSION['adminlogged_in'])) ) {	 ?>
<script>
$(document).ready(function(){
        $("#signout").show();
		 $("#signin").hide();
		  $("#stocks").show();
		   $("#bookproduct").show();
		   $("#mybookings").show();
});
</script>
<?php } ?>
<a id="signin"  style="margin-top:20px" href="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-1">Login</a>
<a  style="margin-top:20px" id="signout" href="signout.php" class="btn btn-primary pull-right">Logout</a>
<div class="collapse navbar-collapse" id="navbar-collapse" >
<ul class="nav navbar-nav"  style="margin-top:20px">
<li>
<a href="index.php">Home</a>
</li>
<li>
<a id="stocks" href="stocks.php">Stocks</a>
</li>
<li>
<a href="#aboutus">About Us</a>
</li>

<li>
<a href="#contactus" >Contact Us</a>
</li>
<li>
<a  id="mybookings" href="mybookings.php" >My Bookings</a>
</li>
</ul>
<?php 
if((isset($_SESSION['logged_in'])) ) {
	$name=$_SESSION['logged_in'];
	echo('<p style="color:#FFF; margin-top:30px; margin-right:20px" class="pull-right"> Welcome '.$name.' </p>');
}else{
	$name="";
	echo('');
} ?> 
</div>
</div>
</nav>
</header>
<!--end of navbar-->


<!-- Start of modal code -->
<div class="modal fade " id="modal-1">
<div class="modal-dialog">
<div class="modal-content">
<div  class="modal-header">
<button type="button" class="close" data-dismiss="modal" > &times;</button>
<h3 class="modal-title"><span id="glyphico" class="glyphicon glyphicon-log-in"> </span> Sign in </h3>
</div>
<div class="modal-body">
<form action="signinprocess.php" method="post" >
<div class="form-group-lg has-success">
<input class="form-control" name="username" type="text" placeholder="Enter username here" required>
</div>
<br>
<div class="form-group-lg has-success">
 <input class="form-control" name="password" type="password" placeholder="Enter password here" required>
</div>
<br>
<button id="sign-in" class="btn btn-lg btn-primary center-block" type="submit">Sign in  </button>

</form>
</div>
<div class="modal-footer">
<a href="Createaccount.php" class="btn btn-danger text-right">dont have an account</a>
</div>
</div>
</div>
</div>

<!-- end of modal code -->

</header>