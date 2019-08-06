 <?php
session_start();

//echo "$uname,$password recieved ";

require 'connectDB.php';
$username=$_GET['username'];

$password=$_GET['password'];


try {

#$stmt = $conn->prepare("select count(*) from User_login where User_name='$uname' and Password='$passwd'");


$sql = "select count(*) from login where username='$username' and password='$password'";

if ($res = $conn->query($sql)) {

    /* Check the number of rows that match the SELECT statement */
$val = $res->fetchColumn();
 
if ($val > 0)
 {

	
$_SESSION['username'] = $_GET['username'];
       
header("Location:home.php");
			
	
}
  else
{
$Message="User Name or Password may be incorrect!";


header("Location: index.php?Message=" . urlencode($Message));



}
   		



}
}


catch(PDOException $e)
    
{
    echo $sql . "<br>" . $e->getMessage();
   
 }


$conn = null;

?>

