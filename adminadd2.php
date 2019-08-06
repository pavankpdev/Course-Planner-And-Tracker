

 <?php
require 'connectDB.php';
$sfi=$_GET['si'];
$se=$_GET['seme'];
$c=$_GET['cc'];
$u=$_GET['un'];
$t=$_GET['tn'];
$sd1=$_GET['sd'];
$ed=$_GET['ed'];
$th=$_GET['ths'];
$m=$_GET['mfe'];
$l=$_GET['lo'];
try {
    


		$sql = "INSERT INTO ct(Staff_id,Sem,Course_code,Unit_no,Title_name,Date_planned,Date_complition,Hours,Methodology,Learning_outcomes_achieved) values('$sfi','$se','$c','$u','$t','$sd1','$ed','$th','$m','$l')";

		print $sql;
  
  		// use exec() because no results are returned
    			$conn->exec($sql);
   
    		echo 
	$Message="Sucessfully inserted!";


	header("Location: subd2.php?Message=" . urlencode($Message));


}		
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>