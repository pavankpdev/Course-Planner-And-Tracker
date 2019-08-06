 <?php

$sfn=$_GET['stname'];
$sfi=$_GET['stid'];
$se=$_GET['sem'];
$c=$_GET['cc'];
$y=$_GET['year'];
 
$conn = mysql_connect("localhost", "root", "","cpt");

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }
mysql_select_db("cpt", $conn);

 

$sql="INSERT INTO staff (Staff_name,Staff_id,Sem,Course_code,Year)

VALUES

('$sfn','$sfi','$se','$c','$y')";


 

if (!mysql_query($sql,$conn))

  {

  die('Error: ' . mysql_error());

  }
if($sql){



echo "<script> alert('Allocated  successfully'); </script>";
echo "<script> location.href='suball.php'; </script>";
}
else
{
echo "<script> alert('Failed to Allocated'); </script>";
echo "<script> location.href='suball.php'; </script>";
}


mysql_close($conn);

?>

</body>

</html>