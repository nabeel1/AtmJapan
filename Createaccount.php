<?php require("dbconnection.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Bootstrap/stylesheet.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="icon" type="image/png" href="Images/hlogo.png" sizes="16x16">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
<title>ATMJapan</title>
</head>
<body>
<!-- header start --> 
<?php include("header.php"); 
if (isset($_POST['submit'])) {
		$error = "";

		if (!empty($_POST['name'])) {
		$name = strtolower($_POST['name']);
		} else {
		$error .= "You didn't type in your username. <br />";
		}

		if (!empty($_POST['email'])) {
		$email = strtolower($_POST['email']);
		  if (!preg_match("/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){ 
		  $error .= "The e-mail address you entered is not valid. <br/>";
		  }
		} else {
		$error .= "You didn't type in an e-mail address. <br />";
		}

		if (!empty($_POST['password'])) {
		$message = md5($_POST['password']);
		} else {
		$error .= "You didn't type in password. <br />";
		}
		
		
		if(($_POST['code']) == $_SESSION['code']) { 
		$code = $_POST['code'];
		} else { 
		$error .= "The captcha code you entered does not match. Please try again. <br />";    
		}
		
		$status="not_allowed";
		
		$sql="insert into users(username,password,email,status) values('$name','$message','$email','$status')";
		$boolstatus=mysql_query($sql);
		
		
		if($boolstatus){
echo '<script type="text/javascript">';
        	echo 'window.location="thanks.php";';
        	echo '</script>';		}
		

		}



?>
<!-- header end --> 
<!-- ------------------------start of contact us---------------------------------->
<div class="container-fluid"  >
<div class="page-header" id="contactus">
<h1 class="ptext " style="color:#333333;margin-top:90px; margin-left:50px;"> Create Account </h1>
<div class="row">
<div class="col-xs-offset-4 col-sm-4">
<?php
		
		?>
	
		<div id="contactForm">
		<?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your username could not get register<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			
				<label>Username:</label>
				<input type="text" name="name" required/>
	
				<label>Email:</label>
				<input type="email" name="email" required/>
				
				<label>Password:</label><br />
								<input type="password" name="password" required/>
				
               
	<h3>Enter Captcha value:</h3>
				<label><img src="captcha.php"></label>
				<input type="text" name="code" required> <br /> 

				<input type="submit" class="submit" name="submit" value="Submit" />
				
			</form>
		</div>
        
        </div>
        </div>
        </div>
        </div>




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