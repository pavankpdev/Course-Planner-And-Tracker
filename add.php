

 <?php
require 'connectDB.php';
$sfi=$_GET['si'];
$se=$_GET['seme'];
$c=$_GET['cc'];
$u=$_GET['un'];
$t=$_GET['tn'];
$m=$_GET['mfe'];
$l=$_GET['lo'];
try {
    


		$sql = "INSERT INTO ct(Staff_id,Sem,Course_code,Unit_no,Title_name,Methodology,Learning_outcomes_achieved) values('$sfi','$se','$c','$u','$t','$m','$l')";

		print $sql;
  
  		// use exec() because no results are returned
    			$conn->exec($sql);
   
    		echo 
	$Message="Sucessfully Added!";

echo $u;
	header("Location: subd.php?Message=" . urlencode($Message));


}		
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>