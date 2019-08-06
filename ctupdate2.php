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
$productResult2 = $db_handle->runQuery("select id,Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodology,Learning_outcomes_achieved from ct where Staff_id='$s' and Course_code='$c'");
if(!
$productResult2){
echo "<script> alert('Record Not Found, Plz Check Your Staff Id or Course Code'); </script>";
echo "<script> location.href='adminpage2.php'; </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.tabledit.js"></script>
<?php include 'header.php';?>
<?php require_once 'head2.php'; ?>


</head>
<?php include 'menu2.php';?>
<script type="text/javascript">

$(document).ready(function(){
	
$('#example1').Tabledit({
    url: 'logic-edit-delete.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'Unit_no'], [2, 'Title_name'],[3, 'Subdivision'], [4, 'Date_planned'],[5, 'Hours'], [6, 'Date_complition'],[7, 'Methodology'], [8,'Learning_outcomes_achieved']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
	});


});

</script>
<style>
#example1{
    font-size: 1.15em;
    font-family: arial;
    color: #212121;
color:black;
}
.table.user-select-none {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

</head>
<body>

 <div class="container" style="margin-top:80px;">
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Live Table Edit and Delete</h1></a> 
        </div>
       
        <div class="panel-body"> 
        <table class="table" id="example1" style="border:1px solide red">
    	<tr>
<th>Id</th><th>Unit No</th><th>Title Name</th><th>Subdivision</th><th>Date Planned</th><th>Hours</th><th>Date Complition</th><th>Methodolagy For Evaluate</th><th>Learning Outcome</th><th>Edit/Delete</th>
                </tr>
    	<?php if (! empty($productResult2)) {
                foreach ($productResult2 as $key => $value) {
                    ?>
                 
                     <tr>
	<td><?php echo $productResult2[$key]["id"]; ?></td>
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
        </table>
        </div>

      

    </div>
  </div>

</body>
</html>