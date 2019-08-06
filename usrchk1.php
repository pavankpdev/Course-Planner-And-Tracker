 <?php
session_start();

//echo "$uname,$password recieved ";

require 'connectDB.php';
$s=$_GET['stfid'];
$c=$_GET['cc'];

$password=$_GET['password'];


try {

#$stmt = $conn->prepare("select count(*) from User_login where User_name='$uname' and Password='$passwd'");


$sql = "select count(*) from lt where Staff_id='$stfid' and Course_code='$c'";

if ($res = $conn->query($sql)) {

    /* Check the number of rows that match the SELECT statement */
$val = $res->fetchColumn();
 
if ($val > 0)
 {

	
$_SESSION['Staff_id'] = $_GET['stfid'];
       
header("Location:mut.php");
			
	
}
  else
{
$Message="User Name or Password may be incorrect!";


header("Location: staff.php?Message=" . urlencode($Message));



}
   		



}
}


catch(PDOException $e)
    
{
    echo $sql . "<br>" . $e->getMessage();
   
 }


$conn = null;

?>