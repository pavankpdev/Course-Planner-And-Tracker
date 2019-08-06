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

		<title>
			Home Page
		</title>
	<head>
	<link href="sjplib.css" rel="stylesheet" type="text/css" />

	   			<?php require_once 'head.php'; ?>
	</head>

<body>
<?php include 'header.php';?>
<!-- ============================================================================================ -->
<div class="pageContentWrapper" align="center"> 
		<?php include 'menu.php';?>	
</div>
		
</body>

</html>
