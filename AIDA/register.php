<?php require 'header.php'; ?>
<body>
	<div class="container">
		<div class ="sixteen columns">
		<?php require 'navbar.php'; ?>
	</div>  

<div class="sixteen columns">

<form method="GET" action="customerregister.php">
	<p>Title: 
		<select name="title">  	
  		<option SELECTED>Miss.</option>
 		<option>Mrs.</option>
  		<option>Ms.</option>
 		<option>Mr.</option>
 		<option>Dr.</option>
		</select>
	</p>
		
		<p> Please Enter First Name: <input type="text" name="firstname" required> </p>
		<p> Please Enter Last Name: <input type="text" name="surname" required> </p>
		<p>Gender: <input type="radio" class = "radiobutton" name="gender" value="Male" checked="checked" /> Male
   		<input type="radio" class = "radiobutton" name="gender" value="Female" /> Female </p>
  		

 </select></p>		
		<label for="address1">Address Line 1 </label>
			<input type="text" id="address1" name="address1" /> <br/>
		<label for="address2">Address Line 2 </label>
			<input type="text" id="address2" name="address2" /> <br/>
		<label for="county">County</label>
			<input type="text" id="county" name="county" /> <br/>
		<label for="postcode">Postcode</label>
			<input type="text" id="postcode" name="postcode" size="10" maxlength="10"> <br/>
		<label for="email">email</label>
     		<input type="email" id="email" name="email" />
		<label for="password">password</label>
			<input type="password" id="password" name="password" size="10" maxlength="10"> <br/>				
	<input type="submit" value="Submit" name="submit" /> <br/>
	</form>

		</div>

<div class ="sixteen columns"> 
       <?php require 'footer.php'; ?> 
	</div>
</div>
</body>

