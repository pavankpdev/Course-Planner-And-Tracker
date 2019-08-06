<?php
	
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<html>
<head>
<title>Subdivision</title>

<style>

body{font-family: "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif;font-size: 14px; background-image: -webkit-radial-gradient(circle,#165387,#00BFFF);}
.float-clear{clear:both;}
.float-left{float:left;}
#outer {margin: 0 auto;width: 70%;border-top: #333 2px solid;background-color: #FFFFFF;}
.product-item input[type="text"] {padding: 5px;border:#ccc 1px solid;border-radius:4px;margin: 0px 10px;}
.product-item input[type="checkbox"] {margin: 10px;}
#header div{padding: 20px 5px 15px;margin: 0px 10px;}
.col-heading{width:150px;font-size:16px;font-weight:bold;}
.footer{padding:10px; background:#333;margin-top:20px;}
.btn-action{padding:10px;}
.btn-action input[type="button"]{padding:5px; border:#CCCCCC 1px solid; border-radius: 4px;}
input[type="submit"]{padding:5px 20px; border:#000000 1px solid; border-radius: 4px; background-color:#09f;color:#fff;}
.success{color:#66CC00;padding: 5px; font-weight:bold;}

h3{
	font-family: Georgia;
	font-size: 175%;	
	color: white;
}
</style>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function addMore() {
	$("<div>").load("input2.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('div.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>

</head>
<body>


		
			
<form name="frmProduct" method="post" action="sd2.php">
<div class="box-header with-border">
	              <h3 class="box-title" align="center">Add Sub division</h3>
	            </div>
<div id="outer" >
<div id="header" align="center" >
<div class="float-left col-heading">Staff Id</div>
<div class="float-left col-heading">Course Code</div>
<div class="float-left col-heading">Subdivision</div>
<div class="float-left col-heading">Date Planned</div>
<div class="float-left col-heading">Hours</div>

</div>
<div id="product">
<div class="product-item float-clear" style="clear:both;">
<div class="float-left"><input type="checkbox" name="item_index[]" /></div>
<div class="float-left"><input type="text" name="Staff_id[]" required /></div>
<div class="float-left"><input type="text" name="Course_code[]" required /></div>
<div class="float-left"><input type="text" name="Subdivision[]" required /></div>
<div class="float-left"><input type="text" name="Date_planned[]"  /></div>
<div class="float-left"><input type="text" name="Hours[]" required /></div>
<br>
</div>
</div>
<div class="btn-action float-clear" >
&nbsp;&nbsp;&nbsp;<input type="button" name="add_item" value="Add More" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />

<span class="success"><?php if(isset($message)) { echo $message; }?></span>
</div>
<div class="footer" align="center">
<input type="submit" name="save" value="Submit" />
</div>
</div>
</form>
</body>
</html>
