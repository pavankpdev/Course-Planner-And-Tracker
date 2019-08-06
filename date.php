
<?php
// Create connection  
$link = mysqli_connect("localhost", "root", "","cpt");   
// Check connection  
if (!$link)       {  
 die("Connection failed: " . mysqli_connect_error());  }  
$st = $_GET['stfid'];   
$c = $_GET['cc'];



// Specify the start date. This date can be any English textual format  
$date_from = $_GET['sd'];   
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
  
// Specify the end date. This date can be any English textual format  
$date_to = $_GET['ed'];
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
  
// Loop from the start date to end date and output all dates inbetween  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
     
$s=date("Y-m-d", $i);


mysqli_select_db($link, "cpt"); 
 
$h=1;
$query2 = "INSERT INTO allocate(Staff_id,Course_code,Date,Hours) values('$st','$c','$s','$h')";  
$res2 = mysqli_query($link,$query2);


}



if($query2){



echo "<script> alert('Generate successfully'); </script>";
echo "<script> location.href='auto.php'; </script>";
}






?>