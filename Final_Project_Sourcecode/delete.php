<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.html"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$con = mysqli_connect("localhost", "fabdulka", "fabdulka", "test") or die(mysqli_error()) or die("Cannot connect to database");
		//mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		//mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$id = $_GET['id'];
		mysqli_query($con, "DELETE FROM skymilel WHERE id='$id'");
		header("location: home.php");
	}
?>