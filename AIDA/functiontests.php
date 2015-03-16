<?php require 'header.php'; ?>

<body>

	<div class="container">

		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>

	</div>  

    <div class="sixteen columns">


<h3>Built-in Functions</h3>

      <?php         

        $strvar = "apples";

        $intvar = 19;

        $floatvar = 27.579;

        $product_array = array("id"=>234, "description"=>"apples", "type"=>"bramley");

        $url = "www.somesite.com";

         

    print "<br />a) Length of the string $strvar = ".strlen($strvar);    

    print "<br />b) apples to uppercase $strvar = ".strtoupper($strvar);

    print "<br />c)Substring 'some' in $url starts at index position  = ".strpos($url, "some");

    print "<br />d) apples encrypted with md5  $strvar = ".md5($strvar);     

    print "<br />e) Get the variable type of $intvar = ".gettype($intvar);   

    print "<br />f) Is 27.579 numeric?  $floatvar = ".is_numeric($floatvar);    

    print "<br />g) Format the number  $floatvar to 1 decimal place = ".round($floatvar, 1);

        

    print "<br />h) Print the $product_array  = ";

    print_r($product_array);     

        

    print "<br />i) Number of items in $product_array  = ".count($product_array);

     print "<br />j) Is apples in the array? = ".in_array("apples", $product_array);     

    print "<br />l) Explode $url into an array (separated by ".") and display = ";

    print_r(explode('.',$url));

    print "<br />m) Format todays date like this  = ".date('D j F Y');           ?>
    
    
    <?php 
    
    //Ensure the correct timezone is 'set date_default_timezone_set('UTC')'. Best done in php.ini

//Specify the format of the date by using a formatting string. For example "j/m/y H:i" '; 

  print "<br /> Date =".date("j/m/y H:i"); //j=Day, m=month, y = year, H = hour(24 hr clock), i=minutes 

  //We can extract specific components. The current year is: 

  $year = date("Y"); 

  print  "<br />It's $year already - time flies<br />"; 

  $minutes = date("i"); 

  $hour = date("h"); 

  print " ..and its $minutes past  $hour "; 

  

  /* mktime generats a 'timestamp' for a  particular time 

  *  int mktime(int hour, int minute, int second, int month, int day, int year, int is_dst) 

  *  The example below generates a timestamp for 16/8/82 

  */ 

  // To create a birth date of 16/7/92 = mktime(0,0,0,7,16,92)"; 

  $dob = mktime(0,0,0,8,16,92); 

  //date of birth from above (different formatting) 

  echo "<p>A person born on ". date("j/m/y",$dob)." was born on a ".date('l', $dob) ."</p>"; //l=Day of week, j=Day, S=suffix(nd,th..), F= month 

  //Calculate age 

  $diff = (date("Y") - date("Y",$dob)); 

  echo "<p>Their age now =  $diff </p>";
?>
            

 


	</div>


	<div class ="sixteen columns"> 

       <?php require 'footer.php'; ?> 

	</div>

	</div>



</body>

</html>