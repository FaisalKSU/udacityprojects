<?php
session_start();
$con = mysqli_connect("localhost", "fabdulka", "fabdulka", "test") or die(mysqli_error()) or die("Cannot connect to database");
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$bool = true;



    //Connect to server
    //mysqli_connect("localhost", "root", "") or die (mysql_error()); 
//mysqli_connect("localhost", "test", "test") or die (mysqli_error()); 

    //Connect to database
    //mysqli_select_db("first_db") or die ("Cannot connect to database"); 
//mysqli_select_db("test") or die ("Cannot connect to database"); 

    // Query the users table
$query = mysqli_query($con, "Select * from USERS WHERE username='$username'"); 

    //Checks if username exists
$exists = mysqli_num_rows($query); 
$table_users = "";
$table_password = "";

    //IF there are no returning rows or no existing username
if($exists > 0) 
    {  // display all rows from query
     while($row = mysqli_fetch_assoc($query)) 

       {  // the first username row is passed on to $table_users
    	  // and so on until the query is finished
        $table_users = $row['username']; 

	  // the first password row is passed on to $table_password
	  // and so on until the query is finished
        $table_password = $row['password']; 
      }

	// checks if there are any matching fields
      if(($username == $table_users) && ($password == $table_password))
      {
        if($password == $table_password)
        {
	     //set the username in a session. This serves as a global variable
         $_SESSION['user'] = $username; 

	     // redirects the user to the authenticated home page
         header("location: home.php"); 
       }
     }
     else
     {
	// Prompts the user
      Print '<script>alert("Incorrect Password!");</script>'; 

	// redirects to login.php
      Print '<script>window.location.assign("login.php");</script>'; 
    }
  }
  else
  {
	// Prompts the user
    Print '<script>alert("Incorrect username!");</script>'; 

	// redirects to login.php
    Print '<script>window.location.assign("login.php");</script>'; 
  }
  ?>