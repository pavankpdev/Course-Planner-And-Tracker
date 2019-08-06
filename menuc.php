<!DOCTYPE html>
<html lang="en" class="nav-no-js">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" >

    <title>Responsive Navigation</title>


<link rel="stylesheet" href="menu/css/normalize.min.css">
    
  
<link rel="stylesheet" href="menu/css/nav-core.min.css">
    
<link rel="stylesheet" href="menu/css/nav-layout.min.css">

   

 <!--[if lt IE 9]>
    
<link rel="stylesheet" href="menu/css/ie8-core.min.css">
    
<link rel="stylesheet" href="menu/css/ie8-layout.min.css">
    
<script src="menu/js/html5shiv.min.js"></script>
   
 
<![endif]-->

    
<script src="menu/js/rem.min.js"></script>




</head>
<body>
  



<a href="#" class="nav-button">Menu</a>

<nav class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li class="nav-submenu"><a href="#">Course Plan</a>
        <ul>
        <li><a href="config.php">Add</a></li>
       <li><a href="cpln.php">Course Planner</a></li>
       </ul>
        </li>
        <li class="nav-submenu"><a href="#">Course Update</a>
            <ul>
                <li><a href="staffpage.php">Course Update</a></li>
	
       </ul>
        </li>
<li class="nav-submenu"><a href="#">Course Track</a>
            <ul>
                <li><a href="ctrkr.php">Course Tracker</a></li>
	
       </ul>
        </li>
<li class="nav-submenu"><a href="#">Generate</a>
            <ul>
                <li><a href="xl.php">XL</a></li>
	
       </ul>
        </li>
         <li><a href="logout.php">Logout</a></li>

 
            
                   
        
</nav>

<a href="#" class="nav-close">Close Menu</a>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/nav.jquery.min.js"></script>
<script>
    $('.nav').nav();
</script>
</body>
</html>