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
<title>stf id</title>
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
			
	            <div class="box-header with-border" align="center">
	              <h3 class="box-title" >Automatic Genarate</h3>
	           
	 
	              
	            	
		<form action="gnrate.php" method="GET">
			 <div id="product">
			<div class="product-item float-clear" style="clear:both;"><br>
			
				
			<div class="form-group">	
				<label name="uname" align="right">Start Date :</label>
				<input class="form-group" type="text" name="sd" required> 
			</div>
				
			<div class="form-group">
			                  <label name="uname" align="right">End Date :</label>
			                  <input class="form-group" type="text" name="ed"  required> 
			</div>

			<div class="form-group">
			                  <label name="uname" align="right">Course Code :</label>
			                  <input class="form-group" type="text" name="cc"  required> 
			</div>
			<div class="col-md-offset-4 col-md-4"><br>
				 <input type="submit" class="btn btn-primary" value="Genarate" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
			</div>			</div>

		              					
</form>
	


	
</body>

</html>