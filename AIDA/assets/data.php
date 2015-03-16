<?php require 'header.php'; ?>


<?php 
//consultation: 

$query = "SELECT Author FROM Books" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = $link->query($query); 

//display information: 

while($row = mysqli_fetch_array($result)) { 
  echo $row["Author"] . "<br>"; 
} 
?>