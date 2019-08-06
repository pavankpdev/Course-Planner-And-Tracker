

 <?php
require 'connectDB.php';
$de=$_GET['des'];
$d=$_GET['dat'];

try {
    


		$sql = "INSERT INTO holiday(description,Date) values('$de','$d')";

		print $sql;
  
  		
  
  		// use exec() because no results are returned
    			$conn->exec($sql);
   
    		echo 
	$Message="Sucessfully inserted!";


	header("Location: addholiday.php?Message=" . urlencode($Message));


}		
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>