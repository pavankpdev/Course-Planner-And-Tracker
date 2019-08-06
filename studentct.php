
<?php
include 'DBController.php';
 $db_handle = new DBController();

$c=$_GET['cc'];
$productResult = $db_handle->runQuery("select Staff_name,Sem,Course,Course_code,Year from Staff where Course_code='$c'");

 ?>
<?php
$db_handle = new DBController();

$c=$_GET['cc'];
$productResult2= $db_handle->runQuery("select Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodology,Learning_outcomes_achieved from ct where Course_code='$c'");
if(!
$productResult2){
echo "<script> alert('Record Not Found, Plz Check Your Staff Id or Course Code'); </script>";
echo "<script> location.href='index.php'; </script>";
}

?>



		




<html>
<head>

<style>
body {
    font-size: 0.95em;
    font-family: arial;
    color: red;
}

th {
    background: #4CAF50;
    border-bottom: 1px solid #000000;
}

#table-container {
    width: 1200px;
    margin: 50px auto;

}

table#tab {
    border-collapse: collapse;
background: white;
    width: 100%;
color: black;
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 1.10em;
width: 1200px;
}


</style>
<?php require_once 'head.php';?>
<?php include 'header.php';?>

		

</head>
<body>
<?php include 'smenu.php';?>
<div id="table-container">

	
      <table id="tab" align="center">
            <thead>
                <tr>
                    
<th>Name of the faculty</th><th>Sem</th><th>Course</th><th>Course Code</th><th>Year</th>
                </tr>
            </thead>
            <tbody>
 
            <?php
            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                   
                    <td><?php echo $productResult[$key]["Staff_name"]; ?></td>
                    <td><?php echo $productResult[$key]["Sem"]; ?></td>
	<td><?php echo $productResult[$key]["Course"]; ?></td>
	<td><?php echo $productResult[$key]["Course_code"]; ?></td>
	<td><?php echo $productResult[$key]["Year"]; ?></td>
                </tr>
             <?php
                }
            }
            ?>
      </tbody>
        </table> 
<table id="tab" align="center">
            <thead>
                <tr>
                    
<th>Unit No</th><th>Title Name</th><th>Subdivision</th><th>Date Planned</th><th>Hours</th><th>Date Complition</th><th>Methodology For Evaluate</th><th>Learning Outcome</th>
                </tr>
            </thead>
            <tbody>
 
            <?php
            if (! empty($productResult2)) {
                foreach ($productResult2 as $key => $value) {
                    ?>
                 
                     <tr>
                    <td><?php echo $productResult2[$key]["Unit_no"]; ?></td>
                    <td><?php echo $productResult2[$key]["Title_name"]; ?></td>
                    <td><?php echo $productResult2[$key]["Subdivision"]; ?></td>
                    <td><?php echo $productResult2[$key]["Date_planned"]; ?></td>
	<td><?php echo $productResult2[$key]["Hours"]; ?></td>
	<td><?php echo $productResult2[$key]["Date_complition"]; ?></td>
	<td><?php echo $productResult2[$key]["Methodology"]; ?></td>
	<td><?php echo $productResult2[$key]["Learning_outcomes_achieved"]; ?></td>
                </tr>
             <?php
                }
            }
            ?>
      </tbody>
        </table> 
        
            </form>
        
    </div>
</body>
</html>