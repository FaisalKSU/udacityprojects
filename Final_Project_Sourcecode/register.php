<!doctype html>    
<html>
    <head>
        <title>Skymile Logistics Inc</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
	<body>
		<header class="jumbotron">
		  <table class="headertd">
			<tr>
			  <td>
				<img src="images/head.png" alt="logo" >
				<div class="tddiv">
				  <h6 style="line-height:1.3em;">
					<span><strong>Call Us Now: </strong></span>
					<span><strong>1800-000-0000</strong></span>
				  </h6>
				</div>
			  </td>
			  <td>
				<div >
				  <h1>Skymile Logistics Inc</h1>      
				  <p><em>You pick the location, <br> we will take care of the rest.</em></p>
				</div>        
			  </td>
			</tr>
		  </table>
		</header>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav" style="margin-left: 65px;">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="register.php">Apply</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right"> 
				<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Admin </a></li>
				<li><a href="#"><span class=""></span> </a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<footer>
			<h2>Application Page</h2>
			<form action="register.php" method="POST" class="form-inline">
				Enter First Name: <input type="text" name="firstname" required="required"  /><br/>
				Enter Last Name: <input type="text" name="lastname" required="required"  /><br/>
				Enter Email: <input type="text" name="email" required="required"  /><br/>
				Enter Phone Number: <input type="text" name="phonenumber" required="required"  /><br/>
				Enter Experience(yrs): <input type="text" name="exp" required="required"  /><br/>
			   <input type="submit" value="Submit"/>
			</form>
		</footer>
	</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$con = mysqli_connect("localhost", "fabdulka", "fabdulka", "test") or die(mysqli_error()) or die("Cannot connect to database");
		//$id = mysqli_real_escape_string($con, $_POST['id']);
		$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
		$exp = mysqli_real_escape_string($con, $_POST['exp']);
		
		$bool = true;

	

		// checks if bool is true
		if($bool) 
		{
			//Inserts the value into table users
			mysqli_query($con, "INSERT INTO skymilel (firstname, lastname, email, phonenumber, exp) VALUES ('$firstname','$lastname','$email','$phonenumber','$exp')"); 

			// Prompts the user
			Print '<script>alert("Successfully Registered!");</script>'; 

			// redirects to register.php
			Print '<script>window.location.assign("register.php");</script>'; 
		}
	}
?>
