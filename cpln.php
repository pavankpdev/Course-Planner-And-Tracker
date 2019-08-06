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
			<?php include 'menu.php';?>
		
			<br>
			<div class="box box-primary">
			
	            <div class="box-header with-border" align="center">
	              <h3 class="box-title" >Course Plan</h3>
	           
	          
	              
	            	
		<form action="cpdis.php" method="GET">
			<div id="product">
		<div class="product-item float-clear" style="clear:both;">
		
				<div class="form-group"><br>	
			                  <label name="uname" align="right">Staff Id :</label>
			                  <input class="form-group" type="text" name="stfid"  required> 
			                </div>
				
				<div class="form-group">
			                  <label name="uname" align="right">Course Code :</label>
			                  <input class="form-group" type="text" name="cc"  required> 
			                </div></div></div>
				
		              	
				<div class="col-md-offset-4 col-md-4">
				 <input type="submit" class="btn btn-primary" value="Get Plan" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
				</div>
					

</form>
</div>
	


	
</body>

</html>