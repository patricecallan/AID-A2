<?php require 'header.php'; ?>
<body>
	<div class="container">
		<div class ="sixteen columns">
		<?php require 'navbar.php'; ?>
	</div>  

<div class="sixteen columns">

<?php
$title = $_GET['title'];
$firstname = $_GET['firstname'];
$surname = $_GET['surname'];
$gender = $_GET['gender'];
$address1 = $_GET['address1'];
$address2 = $_GET['address2'];
$county = $_GET['county'];
$postcode = $_GET['postcode'];
$email = $_GET['email'];
$password = $_GET['password'];
$query = "INSERT INTO customer (title, firstname, surname, gender, address1, address2, county, postcode, email, password) 
VALUES ('$title', '$firstname', '$surname', '$gender', '$address1', '$address2', '$county', '$postcode', '$email', '$password')"; 
mysqli_query($link, $query) or die ("Error in query: $query. ".mysqli_error());
$query = "Select * from customer";
$result = mysqli_query($link, $query) or die ("Error in query: $query. ".mysqli_error());
echo "<table cellpadding=10 border=1>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['surname']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['address1']."</td>";
echo "<td>".$row['address2']."</td>";
echo "<td>".$row['county']."</td>";
echo "<td>".$row['postcode']."</td>";
echo "<td>".$row['email']."</td>";
echo "</tr>";
}
echo "</table>";
?>       
		</div>
<div class ="sixteen columns"> 
       <?php require 'footer.php'; ?> 
	</div>
</div>
</body>

