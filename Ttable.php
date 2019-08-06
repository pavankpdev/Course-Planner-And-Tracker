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

<title>Lesson Planner</title>

<head>

<?php require_once 'head.php'; ?>

</head>

<body>

<?php include 'header.php';?>


<div class="pageContentWrapper">
	
<div class="row">
		
<div class="container">		
			
<?php include 'menu2.php';?>
	     	
			<div class="box box-primary">
			
	            
			<div class="box-header with-border" align="center">
	              
			<h3 class="box-title">Time Table</h3>
	            </div>
	            
			
			<?php
echo "<table class=\"disptable\">";
  
			echo "<tr><th>Sem</th><th>Course_code</th><th>Day</th><th>Hours</th></tr>";  

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
     
$stmt = $conn->prepare("select * from time");
    
$stmt->execute();

  
// set the resulting array to associative
     
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    
 foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
         echo $v;
   

}


}		
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

echo "</table>";
?> 



</body>

</html>
 
