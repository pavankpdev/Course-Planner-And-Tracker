<?php
	
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>

<!DOCTYPE html>

<html>

<title>search</title>

<head>
 
<?php require_once 'head.php'; ?>

</head>

<body>

<?php include 'header.php';?>


<div class="pageContentWrapper">
	
<div class="row">
		
<div class="container">		
			
<?php include 'menu.php';?>
 
<div class="box box-primary">
			
	            
			
 
<?php

$Search=$_GET['key'];

		
			
			echo "<table class=\"disptable\" >";
  
			echo "<tr><th>Unit No</th><th>Tiltle Name</th><th>Subdivision</th><th>Date Planned</th><th>Hours</th><th>Methodolagy</th><th>Learning Outcome</th></tr>";  
			




class TableRows extends RecursiveIteratorIterator {
     function __construct($it) {
         parent::__construct($it, self::LEAVES_ONLY);
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() {
         echo "<tr>";
     }

     function endChildren() {
         echo "</tr>" . "\n";
     }
}

require 'connectDB.php';


try {
     

$stmt = $conn->prepare("select Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodolagy,Learning_outcome from lt where  Unit_no='$Search' or Title_name='$Search' or Learning_outcome='$Search' or Methodolagy='$Search' or Subdivision='$Search' or Date_planned ='$Search' or Hours='$Search' or Date_complition='$Search'");
    
$stmt->execute();


  
// set the resulting array to associative
     
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    
 foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
         echo $v;
  

   }
}

catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 


</body>
</html>
