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
<title>Adding</title>
<head>

<?php require_once 'head.php'; ?>


</head>
<body>
<?php include 'header.php';?>

<div class="pageContentWrapper">
	<div class="row">
		<div class="container">		
			<?php include 'menu2.php';?>
		
			<br>
			<div class="box box-primary">
			
	            <div class="box-header with-border">
	              <h3 class="box-title">Lesson Plan</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form action="adminadd2.php" role="form" name="Addpro" method="GET">
	            	
		              <div class="box-body">
		              	<div class="col-md-offset-4 col-md-4">
	<div class="form-group">
			                  <label for="uname">Staff Id :</label>
			                  <input class="form-control" type="text" name="si" id="bpublish" required /> 
	</div>		                
			               
 	<div class="form-group">
               	       <label>Sem :</label><select name="seme"class="form-control">
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                          <option value="IV">IV</option>
                          <option value="V">V</option>
                          <option value="VI">VI</option>
                          </select>
	</div>

	<div class="form-group">
			                  <label for="uname">Course Code :</label>
			                  <input class="form-control" type="text" name="cc" id="bpublish" required /> 
	</div>
	
	<div class="form-group">
			                  <label for="uname">Unit No :</label>
			                  <input class="form-control" type="text" name="un" id="bpublish" required /> 
	</div>
		
	<div class="form-group">
			                  <label for="uname">Title Name :</label>
			                  <input class="form-control" type="text" name="tn" id="bpublish" required /> 
	</div>

	



	<div class="form-group">
			                  <label for="uname">Methodolagy For Evaluate:</label>
			                  <input class="form-control" type="text" name="mfe" id="bpublish" required> 
	</div>
			           
       	<div class="form-group">
			                  <label for="uname">Learning Outcome :</label>
			                  <input class="form-control" type="text" name="lo" id="bpublish" required> 	
	</div>
	
			<div>
			<input type="submit" class="btn btn-primary" value="continue to add subdivision" class="btn"> 
			<input type="reset" class="btn btn-primary" value="Clear" class="btn">
			</div>
	            </form>
		
	          </div>
		</div>
	</div>
</div>
<?php 
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
#sleep(1);
#header("Location:Adduser.php");
?>

<!--	<?php include 'footer.php';?> -->
</body>
</html>
