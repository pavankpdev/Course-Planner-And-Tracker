<?php	
include 'DBController.php';
$db_handle = new DBController();
$s=$_GET['stfid'];
$c=$_GET['cc'];
$productResult = $db_handle->runQuery("select id,Date,Course_code,Hours,Status from allocate where Staff_id='$s' and Course_code='$c'");
if(!
$productResult){
echo "<script> alert('Record Not Found, Plz Check Your Staff Id or Course Code'); </script>";
echo "<script> location.href='autodis2.php'; </script>";
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
    url: 'logic-edit-delete2.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'Date'],[2, 'Course_code'], [3, 'Hours'], [4, 'Status']]
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

 <div class="container" >
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Live Table Edit and Delete</h1>
        </div>
       
        <div class="panel-body"> 
        <table class="table" id="example1">
    	<tr>
<th>Id</th><th>Date</th><th>Course Code</th><th>Hours</th><th>Status</th><th>Edit/Delete</th>
                </tr>
    	<?php if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                     <tr>
	<td><?php echo $productResult[$key]["id"]; ?></td>
                    <td><?php echo $productResult[$key]["Date"]; ?></td>
                    <td><?php echo $productResult[$key]["Course_code"]; ?></td>
	<td><?php echo $productResult[$key]["Hours"]; ?></td>
	<td><?php echo $productResult[$key]["Status"]; ?></td>
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