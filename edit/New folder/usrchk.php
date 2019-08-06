 <?php

session_start();


require 'connectDB.php';
$username=$_GET['usr'];


try {

#$stmt = $conn->prepare("select count(*) from User_login where User_name='$username'");


$sql = "select count(*) from lp where username='$username'";

if ($res = $conn->query($sql)) {

    /* Check the number of rows that match the SELECT statement */
$val = $res->fetchColumn();
 
if ($val > 0)
 {

	
$_SESSION['username'] = $_GET['usr'];
       
header("Location:page1.php");
			
	
}
  else
{
$Message="User Namemay be incorrect!";


header("Location: usrchk.php?Message=" . urlencode($Message));



}
   		



}
}


catch(PDOException $e)
    
{
    echo $sql . "<br>" . $e->getMessage();
   
 }


$conn = null;

?>

