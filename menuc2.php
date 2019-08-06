<!DOCTYPE html>
<html lang="en" class="nav-no-js">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" >

    <title>Responsive Navigation</title>


<link rel="stylesheet" href="menu2/css/normalize.min.css">
    
  
<link rel="stylesheet" href="menu2/css/nav-core.min.css">
    
<link rel="stylesheet" href="menu2/css/nav-layout.min.css">

   

 <!--[if lt IE 9]>
    
<link rel="stylesheet" href="menu2/css/ie8-core.min.css">
    
<link rel="stylesheet" href="menu2/css/ie8-layout.min.css">
    
<script src="menu2/js/html5shiv.min.js"></script>
   
 
<![endif]-->

    
<script src="menu2/js/rem.min.js"></script>




</head>
<body>
  



<a href="#" class="nav-button">Menu</a>

<nav class="nav">
    <ul>
        <li><a href="home2.php">Home</a></li>
	<li class="nav-submenu"><a href="#">Admin Page</a>
        <ul>
        <li><a href="suball.php">Subject Allocate</a></li>
<li><a href="adm.php">Allocated</a></li>
       </ul>
        </li>
        <li class="nav-submenu"><a href="#">Course Plan</a>
        <ul>
        <li><a href="adminconfig.php">Add</a></li>

<li><a href="cpln2.php">Course Planner</a></li>
       </ul>
        </li>
        <li><a href="adminpage2.php">Course Update</a></li>
            <ul>
                <li><a href="staffpage.php">Course Update</a></li>
	
       </ul>
        </li>
<li class="nav-submenu"><a href="#">Course Track</a>
            <ul>
                <li><a href="ctrkr2.php">Course Tracker</a></li>
	
       </ul>
        </li>
<li class="nav-submenu"><a href="#">Generate</a>
            <ul>
                <li><a href="xl2.php">XL</a></li>
	
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