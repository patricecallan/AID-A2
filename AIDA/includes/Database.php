<?php require 'header.php'; ?>

<body>

	<div class="container">

		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>

	</div>  

    <div class="sixteen columns">

    	<h3>df</h3>

<?php 
$query = "SELECT * FROM Books" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = $link->query($query); 

//display information: 

while($row = mysqli_fetch_array($result)) { 
  echo $row["Genre"] . "<br>"; 
} 
?>




		</div>

	

	<div class ="sixteen columns"> 

       <?php require 'footer.php'; ?> 

	</div>

	</div>



</body>

</html>