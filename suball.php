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
<title>Subject Allocate</title>
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
	              <h3 class="box-title" >Subject Allocate</h3>
	           
	 
	              
	            	
		<form action="addsuball.php" method="GET">
			 <div id="product">
			<div class="product-item float-clear" style="clear:both;"><br>
			
				
			<div class="form-group">	
				<label name="uname" align="right">Staff Name :</label>
				<input class="form-group" type="text" name="stname" required> 
			</div>
				
			<div class="form-group">
			                  <label name="uname" align="right">Staff Id :</label>
			                  <input class="form-group" type="text" name="stid"  required> 
			</div>
			<div id="product">
			<div class="product-item float-clear" style="clear:both;">
			<div class="form-group">
               	       <label>Sem :</label><select name="sem"class="product-item float-clear">
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                          <option value="IV">IV</option>
                          <option value="V">V</option>
                          <option value="VI">VI</option>
                          </select>
	</div></div></div>

		              	<div class="form-group">
			                  <label name="uname" align="right">Course Code :</label>
			                  <input class="form-group" type="text" name="cc" required> 
			 </div>

			<div class="form-group">	
			                  <label name="uname" align="right">Year :</label>
			                  <input class="form-group" type="text" name="year"placeholder="  (YYYY-YY)" required> 
			</div>
		              	                 
				<div class="col-md-offset-4 col-md-4"><br>
				 <input type="submit" class="btn btn-primary" value="Allocate" class="btn" >
				 <input type="reset" class="btn btn-primary" value="Clear" class="btn">
			</div>			</div>	
</form>
	


	
</body>

</html>