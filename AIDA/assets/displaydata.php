/* 1. ESTABLISH THE CONNECTION TO THE DB - USING DB DETAILS IN config.php */
		//This connection information could go in the 'init.php' file	
		//NOTE THE USE OF THE mysqli OO INTERFACE/METHODS
		$mysqli_conn = new mysqli($db['hostname'],$db['username'],$db['password'], $db['database']);
		if ($mysqli_conn -> connect_errno) {//check the connection
			print "Failed to connect to MySQL: (" . $mysqli_conn -> connect_errno . ") " . $mysqli_conn -> connect_error;
		}
	    //string to create a table
		$tableCreate = "CREATE TABLE Members (    id int(11) NOT NULL auto_increment,
  			email varchar(255) NOT NULL, 
  			password varchar(255) NOT NULL, 
	  		PRIMARY KEY (id)
	    )";
		// Drop the table (as we manipulate this data we wish to recreate)
		$query_str = "DROP TABLE IF EXISTS Members CASCADE ";
		$mysqli_conn -> query($query_str);
	 
	 /* 2.CREATE A TABLE AND INSERT DATA */
		if ($mysqli_conn -> query($tableCreate) === TRUE) {
			print " Table  'Members' successfully created.";
		}
		$query_str = "INSERT INTO `Members` VALUES (1, 'brown@leedsmet.ac.uk','jenny') ";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `Members` VALUES (2, 'green@leedsmet.ac.uk','ray') ";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `Members` VALUES (3, 'hashmi@leedsmet.ac.uk','rehana')";
		$mysqli_conn -> query($query_str);
	
	/* 3. GET RESULTS FROM QUERY AND DISPLAY DATA */	
		$result = $mysqli_conn->query("SELECT * FROM Members");
        print " Query returned ". $result->num_rows . " rows ";; 
        //The function to display data is below
        displayData($result);
		
	/* 4. UPDATE DATA (set all passwords to secret) AND DISPLAY */		
	    $mysqli_conn->query("UPDATE Members SET password='secret'");
  	    print "Changing Password to 'Secret'; - Affected rows (UPDATE): = ";
  		print $mysqli_conn->affected_rows;
  		$result = $mysqli_conn->query("SELECT * FROM Members");
  		displayData($result); 	
		
	/* 5. DELETE  DATA (delete green) AND DISPLAY */	
		$mysqli_conn->query("DELETE FROM Members WHERE email = 'green@leedsmet.ac.uk'");
		print "Deleting row with email = green@leedsmet.ac.uk";
   		$result = $mysqli_conn->query("SELECT * FROM Members");
  		displayData($result); 
	

	//The function to display the data	
	  function displayData($result){
		print "<table border = 1 >"; 
  			while ($row = $result->fetch_assoc()){ 
  				print "  <tr>"; 
				print "    <td>" . $row["id"] . "</td>"; 
  				print "    <td>" . $row["email"] . "</td>"; 
  				print "    <td>" . $row["password"] . "</td>"; 
  				print "  </tr>"; 
  			} 
  		print "</table>"; 
       }//end of display function
    