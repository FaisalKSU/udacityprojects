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
			<h2>Login Page</h2>
			<form action="checklogin.php" method="POST">
			   Enter Username: <input type="text" name="username" required="required" /> <br/>
			   Enter password: <input type="password" name="password" required="required" /> <br/>
			   <input type="submit" value="Login"/>
			</form>
		</footer>
      </body>
   </html>