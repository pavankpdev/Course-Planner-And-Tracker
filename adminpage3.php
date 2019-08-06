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
	              <h3 class="box-title" >Lesson Tracker</h3>
	           
	          
	              
	            	
		<form action="usrchk2.php" method="GET">
			
		
				
				<div class="form-group"><br>	
			                  <label name="uname" align="right">Username :</label>
			                  <input class="form-group" type="password" name="usr" id="password" placeholder="Username" required> 
			                </div>
				
				
		              	
				<div class="col-md-offset-4 col-md-4">
				 <input type="submit" class="btn btn-primary" value="Submit" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
				</div>
	
</form>
</div>
	


	
</body>

</html>