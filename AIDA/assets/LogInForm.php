<?php require 'header.php'; ?>

<body>

	<div class="container">

		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>

	</div>  

    <div class="sixteen columns">

    

    <form method="get" action="server_program_name">


    <input type="text" placeholder="Enter Username" required/>

    <input type="password" placeholder="Enter Password" required/>

    <input type="button" value="Login" required/>

		<p> Please Enter First Name: <input type="text" name="name" required> </p>

		<p> Please Enter Last Name: <input type="text" name="name" required> </p>

    	<label for="email">Email: </label>

     	<input type="email" id="email" name="email" />

      	<p>Choose your gender: 

  	 	<input type="radio" class = "radiobutton" name="gender" value="Male" checked="checked" /> Male

   		<input type="radio" class = "radiobutton" name="gender" value="Female" /> Female </p>

      	<p>Age: <input type="number" name="age" min="18" max="99" value="21"><br></p>

      	<p> Please Enter Your Comments </br> <input type = "textarea"  class= "mytextarea" name = "Text" /> </p> </p>

      	<input type="submit" value="Submit">

			</form>

		</div>

	

	<div class ="sixteen columns"> 

       <?php require 'footer.php'; ?> 

	</div>

	</div>



</body>

</html>