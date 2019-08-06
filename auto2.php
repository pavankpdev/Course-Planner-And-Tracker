
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
	              <h3 class="box-title" >Auto Generate Plan</h3>
	           
	          
	              
	            	
		<form action="date2.php" method="GET">
			<div id="product">
		<div class="product-item float-clear" style="clear:both;">
		
				<div class="form-group"><br>	
			                  <label name="uname" align="right">Staff Id :</label>
			                  <input class="form-group" type="text" name="stfid"  required> 
			                </div>
				<div class="form-group">
			                  <label name="uname" align="right">Course Code :</label>
			                  <input class="form-group" type="text" name="cc"  required> 
			                </div>
				<div class="form-group">
			                  <label name="uname" align="right">Start Date :</label>
			                  <input class="form-group" type="text" name="sd"  required> 
			                </div>
				
				<div class="form-group">
			                  <label name="uname" align="right">End Date :</label>
			                  <input class="form-group" type="text" name="ed"  required> 
			                </div></div></div><br>
				
		              	
				<div class="col-md-offset-4 col-md-4">
				 <input type="submit" class="btn btn-primary" value="Generate" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
				</div>
					

</form>
</div>
	


	
</body>

</html>