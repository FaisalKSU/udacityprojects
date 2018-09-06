<html>
  <head>
	  <title>Skymile Logistics Inc</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <?php
  session_start(); //starts the session
  if($_SESSION['user']){ //checks if user is logged in
  }
  else{
    header("location:index.html"); // redirects if user is not logged in
  }
  $user = $_SESSION['user']; //assigns user value
  ?>
  <body>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav" style="margin-left: 65px;">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="register.php">Apply</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right"> 
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin </a></li>
				<li><a href="#"><span class=""></span> </a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		  <div>
				<h2>Applicants Page</h2>
				<p>Hello <?php Print "$user"?>!</p> <!--Displays user's name-->
				<a href="logout.php">Click here to logout</a><br/><br/>

				<h2 align="center">Applicants</h2>
				<table border="1px" width="100%">
				  <tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>PhoneNumber</th>
					<th>Experience</th>
					<th>Delete</th>
				  </tr>
				  <?php
				  $con = mysqli_connect("localhost", "fabdulka", "fabdulka", "test") or die(mysqli_error()) or die("Cannot connect to database");
					//mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					//mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
					$query = mysqli_query($con, "Select * from skymilel"); // SQL Query
					while($row = mysqli_fetch_array($query))
					{
					  Print "<tr>";
						Print '<td align="center">'. $row['id'] . "</td>";
						Print '<td align="center">'. $row['firstname'] . "</td>";
						Print '<td align="center">'. $row['lastname'] . "</td>";
						Print '<td align="center">'. $row['email']. "</td>";
						Print '<td align="center">'. $row['phonenumber']. "</td>";
						Print '<td align="center">'. $row['exp']. "</td>";
						Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
						
					  Print "</tr>";
					}
				  ?>
				</table>
				<script>
				  function myFunction(id)
				  {
				  var r=confirm("Are you sure you want to delete this record?");
				  if (r==true)
					{
					  window.location.assign("delete.php?id=" + id);
					}
				  }
				</script>
		  </div>
  </body>
</html>