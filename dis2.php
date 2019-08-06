
<?php
include 'DBController.php';
 

$db_handle = new DBController();
$s=$_GET['stfid'];
$c=$_GET['cc'];
$productResult = $db_handle->runQuery("select Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodolagy,Learning_outcome from lt where Staff_id='$s' and Course_code='$c'");
if(!
$productResult){

echo "<script> alert('Record Not Found'); </script>";
echo "<script> location.href='cp2.php'; </script>";
}


?>
<html>
<head>

<style>
body {
    font-size: 0.95em;
    font-family: arial;
    color: #212121;
}

th {
    background: #4CAF50;
    border-bottom: 1px solid #000000;
}

#table-container {
    width: 900px;
    margin: 50px auto;

}

table#tab {
    border-collapse: collapse;
background: #333333;
    width: 100%;
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 0.95em;
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
<?php include 'menu.php';?>
</head>
<body>
<div id="table-container">

      <table id="tab" align="right">
            <thead>
                <tr>
                    
<th>Unit No</th><th>Tiltle Name</th><th>Subdivision</th><th>Date Planned</th><th>Hours</th><th>Date Complition</th><th>Methodolagy For Evaluate</th><th>Learning Outcome</th>
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
	<td><?php echo $productResult[$key]["Methodolagy"]; ?></td>
	<td><?php echo $productResult[$key]["Learning_outcome"]; ?></td>
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