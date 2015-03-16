function getAge($day, $month, $year){ 
 if (date("j") >= $day && date("n") >= $month) {
  	$age = (date("Y") - $year); 
  }
  else {
   $age = (date("Y") - $year) - 1; 
  }
  return $age; 
} 
