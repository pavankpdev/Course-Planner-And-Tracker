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
<title>Create User</title>
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
	              <h3 class="box-title" >Lesson Tracker</h3>
	           
	          
	              
	            	
		<form action="lp.php" method="GET">
			
		

				<div class="form-group">
			                  <label name="uname" align="right">Staff Id :</label>
			                  <input class="form-group" type="password" name="stf" id="password" placeholder="Staff Id" required> 
			                </div>
		              	
				<div class="col-md-offset-4 col-md-4">
				 <input type="submit" class="btn btn-primary" value="Report" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
				</div>	
</form>

	</div>	
</body>

</html>