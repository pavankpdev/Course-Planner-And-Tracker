<?php

require 'connectDB.php';

$count = 10;
$day="Mon,Tue,Wed,Thu,Fri";
   
$count=$count +1;
echo "$count";
 $start_date = '2019-01-';
    $end_date = '2019-03-30';  
$Coures_code="15cs63bt";
$Max=52;
 $cnt=0;

   





 while (strtotime($start_date) <= strtotime($end_date)) {
        	
	$timestamp = strtotime($start_date);
        	
      $day = date('D', $timestamp);




        if($day != "Sun"  ){
   
        if($day != "Sun")
{
            
            if($day == "Tue" || $day == "Mon" || $day == "Wed" || $day == "Thu" || $day == "Fri")
{
	
	
                $cnt = $cnt +1;



    


echo "<br/>";
	echo "<table class=\"disptable5\" border=1 align=center>";
            echo"<tr><td>$start_date</td>" . "<td>$day</td>"."<td>$Coures_code</td>"."    <td>1</td></tr>";
            





	echo "</table>";





	
            $Max=$Max - 1;














	
            if ($Max == 0)
{
	echo "<br/>";
                echo "<pre>"."\nslot alloted\n"."</pre>";
                echo "<pre>"."\n Total alloted time is $cnt Hours\n"."</pre>";
                exit(0);
}
            
}
}
}
$c=1; 
		$sql = "INSERT INTO allocate (Date,Day,Course_code,Hours) values('$start_date','$day','$Coures_code','$c')";

		print $sql;
  
  		// use exec() because no results are returned
    			$conn->exec($sql);
   
    		echo 
	$Message="Sucessfully inserted!";


	header("Location: store.php?Message=" . urlencode($Message));

	
        echo "\n";
        $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));echo "</table>";



$conn = null;
 
} 


    






 





?>






