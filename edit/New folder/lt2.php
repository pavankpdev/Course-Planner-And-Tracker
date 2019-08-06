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

<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function addMore() {
	$("<div>").load("inp.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('div.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>
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
			</form><form name="frmProduct" method="post" action="dp.php">

<div id="outer" >

<div id="product">
<div class="product-item float-clear" style="clear:both;">
<table><tr><td>
<div class="float-left"><input type="checkbox" name="item_index[]" /></div></td>

<td><div class="float-left"><input type="text" name="Date_complition[]" required /></div></td>
</table>
</div>
</div>
<div class="btn-action float-clear" >
<input type="button" name="add_item" value="Add More" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />

<span class="success"><?php if(isset($message)) { echo $message; }?></span>
</div>
<div class="footer">
<input type="submit" name="save" value="Submit" />
</div>
</div>
</form>
			<?php
echo "<table class=\"disptable\">";
  
			echo "<tr><th>Course Code</th><th>Unit No</th><th>Tiltle Name</th><th>Subdivision</th><th>Date Planned(Start)</th><th>Hours</th><th>Date Complition(End)</th></tr>";  
 
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
     
$stmt = $conn->prepare("select Course_code,Unit_no,Title_name,Subdivision,Date_planned,Hours from lt");
    
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
 


