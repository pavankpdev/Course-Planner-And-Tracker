<?php
	
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<?php
include 'DBController.php';
 $db_handle = new DBController();
$s=$_GET['stfid'];
$c=$_GET['cc'];
$productResult2 = $db_handle->runQuery("select Staff_name,Sem,Course,Course_code,Year from Staff where Staff_id='$s' and Course_code='$c'");
if (isset($_POST["export"])) {
    $filename = "Export_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult2)) {
        foreach ($productResult2 as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }

    
}


$productResult = $db_handle->runQuery("select Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodology,Learning_outcomes_achieved from ct where Staff_id='$s' and Course_code='$c'");
if(!
$productResult){

echo "<script> alert('Record Not Found, Plz Check Your Staff Id or Course Code'); </script>";
echo "<script> location.href='xl2.php'; </script>";
}

if (isset($_POST["export"])) {
    $filename = "Export_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }

    exit();
}
?>

<html>
<head>

<style>
#tab{
    font-size: 1.15em;
    font-family: arial;
    color: white;
width: 1150px;
}

th {
    background: #4CAF50;
    border-bottom: 1px solid #000000;
width: 1200px;
}

#table-container {
    width: 1100px;
    margin: 50px auto;

}

table#tab {
    border-collapse: collapse;
background: black;
      
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 0.95em;
    width: 1200px;
}

.btn {
    padding: 8px 4px 8px 1px;
}
#btnExport {
    padding: 10px 40px;
    background: #499a49;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}
</style>
<?php require_once 'head.php';?>
<?php include 'header.php';?>
<?php include 'menu2.php';?>
</head>
<body>
<div id="table-container">

 <table id="tab" align="center">
            <thead>
                <tr>
                    
<th>Name of the faculty</th><th>Sem</th><th>Course</th><th>Course Code</th><th>Year</th>
                </tr>
            </thead>
            <tbody>
 
            <?php
            if (! empty($productResult2)) {
                foreach ($productResult2 as $key => $value) {
                    ?>
                 
                   
                    <td><?php echo $productResult2[$key]["Staff_name"]; ?></td>
                    <td><?php echo $productResult2[$key]["Sem"]; ?></td>
	<td><?php echo $productResult2[$key]["Course"]; ?></td>
	<td><?php echo $productResult2[$key]["Course_code"]; ?></td>
	<td><?php echo $productResult2[$key]["Year"]; ?></td>
                </tr>
             <?php
                }
            }
            ?>
      </tbody>
        </table> 
      <table id="tab"  align="center">
             <thead>
                <tr>
                    
<th>Unit No</th><th>Tiltle Name</th><th>Subdivision</th><th>Date Planned</th><th>Hours</th><th>Date Complition</th><th>Methodology For Evaluate</th><th>Learning Outcome</th>
                </tr>
            </thead>
            <tbody>
 
            <?php
            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                     <tr>
                    <td><?php echo $productResult[$key]["Unit_no"]; ?></td>
                    <td><?php echo $productResult[$key]["Title_name"]; ?></td>
                    <td><?php echo $productResult[$key]["Subdivision"]; ?></td>
                    <td><?php echo $productResult[$key]["Date_planned"]; ?></td>
	<td><?php echo $productResult[$key]["Hours"]; ?></td>
	<td><?php echo $productResult[$key]["Date_complition"]; ?></td>
	<td><?php echo $productResult[$key]["Methodology"]; ?></td>
	<td><?php echo $productResult[$key]["Learning_outcomes_achieved"]; ?></td>
                </tr>
             <?php
                }
            }
            ?>
      </tbody>
        </table> 

        <div class="btn">
            <form action="" method="post">
                <button type="submit" id="btnExport"
                    name='export' value="Export to Excel"
                    class="btn btn-info">Export to Excel</button>
            </form>
        </div>
    </div>
</body>
</html>