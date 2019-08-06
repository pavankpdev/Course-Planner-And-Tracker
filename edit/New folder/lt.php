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

<title>Lesson Truckerr</title>

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
			
	            
			<div class="box-header with-border" align="center">
	              
			<h3 class="box-title">Report</h3>
	            </div>
	            
			<!-- /.box-header -->
	            <!-- /.form start -->
                	

			<form action="sname2.php" method="GET">
			<div class="box-header with-border" align="right">
			<input type="text" name="key" id="key" placeholder=" Search here ... " required /> 
			<input type="submit" value="Search" />
</div>
			</form>
			<?php
echo "<table class=\"disptable\">";
  
			echo "<tr><th>Sem</th><th>Course Code</th><th>Unit No</th><th>Tiltle Name</th><th>Subdivision</th><th>Date Planned(Start)</th><th>Hours</th><th>Date Complition(End)</th><th>Methodolagy For Evaluate</th><th>Learning Outcome</th></tr>";  
$s=$_GET['stf'];   
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
     
$stmt = $conn->prepare("select Sem,Course_code,Title_name,Subdivision,Date_planned,Hours,Date_complition from lt where Staff_id='$s'");
    
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
 


