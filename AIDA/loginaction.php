<?php
session_start();
$link = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","zjeX9qXM","patricecallan_c") or die("Error " . mysqli_error($link)); 

  // Get the data collected from the user

  $email = trim($_POST["email"]);

  $password = trim($_POST["password"]);

  //Check for errors

  if (empty($email) or empty($password)) {

  $_SESSION["message"] = "Must enter Username and Password ";

  header("Location: login.php");	//Redirection information

  exit ;//Ends the script

  }

  $email = strip_tags($email);

  $password = strip_tags($password);

  //NEED MORE SECURITY -BETTER FILTER AND SANITISE -  ENCRYPT PASSWORD - SEE ADVANCED.

//Create and run a query with the given details

  $query = "SELECT * FROM customer WHERE Email= '$email' AND  Password = '$password' ";

  $result = mysqli_query($link,$query) or exit("Error in query: $query. " . mysqli_error());

// see if any rows were returned

  if ($row = mysqli_fetch_assoc($result)) {//Then we have a successful login

  //Create a session variable to store the user name.

  $_SESSION["authenticatedUserEmail"] = $email;

  //We could also use information drawn from the database eg ID

  $_SESSION['CustomerID'] = $row['CustomerID'];//This could be used later to get more information

  // Relocate to the logged-in page

  header("Location: loginsuccess.php");

  } else {//Login was unsuccesful

  $_SESSION["message"] = "Could not login as $email - $query";

  header("Location: login.php");//Go back to the login pages

  } //End else
?>
     		