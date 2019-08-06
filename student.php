
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
			<?php include 'smenu.php';?>
		
			<br>
			<div class="box box-primary">
			
	            <div class="box-header with-border" align="center">
	              <h3 class="box-title" >Course Tracker</h3>
	           
	          
	              
	            	
		<form action="studentct.php" method="GET">
			<div id="product">
		<div class="product-item float-clear" style="clear:both;">
		
				
				<br><br>
				<div class="form-group">
			                  <label name="uname" align="right">Course Code :</label>
			                  <input class="form-group" type="text" name="cc"  required> 
			                </div></div></div>
				
		              	
				<div class="col-md-offset-4 col-md-4">
				 <input type="submit" class="btn btn-primary" value="Get Tracker" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
				</div>
					

</form>

	</div>	
</body>

</html>