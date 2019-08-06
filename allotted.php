<?php
include 'DBController.php';
 $db_handle = new DBController();

$productResult = $db_handle->runQuery("select Staff_name,Sem,Course,Course_code,Year from Staff");

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
    width: 1200px;
    margin: 50px auto;

}

table#tab {
    border-collapse: collapse;
background: #333333;
    width: 80%;
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
<div id="table-container">

<?php include 'smenu.php';?>	<br>
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
        
            </form>
        
    </div>
</body>
</html>