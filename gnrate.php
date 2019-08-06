
<html>

<title>Automatic Genarate </title>

<head>

<script>
var disabledDates = ["2019/01/15","2019/01/16","2019/01/17"]
</script>
<?php require_once 'head.php'; ?>

<?php include 'header.php';?>
<?php include 'menu.php';?></head>

<body>

<?php
	$a="2019/01/01";
	$b="2019/01/07";
	$c="2019/01/10";
	$d="2019/01/14";
	 
	
    $Sub1 ='Maths';
    $Max=52;
    $Day="Mon,Tue,Wed,Thu,Fri"; 
echo "<table class=\"disptable4\" border=1 align=center>";
echo "<tr><th>Allocated Date</th><th>Day</th><th>Course Code</th><th>Hours</th></tr>"; 
echo "</table>";

echo "<br/>";
echo "</table>";
    date_default_timezone_set('UTC');
  
    $start_date = $_GET['sd'];
    $end_date = $_GET['ed'];
    $Coures_code = $_GET['cc'];
    $cnt=0;
    while (strtotime($start_date) <= strtotime($end_date)) {
        $timestamp = strtotime($start_date);
        
        $day = date('D', $timestamp);

	

        if($day != "Sun" && $start_date != $a && $start_date != $b && $start_date != $c && $start_date != $d ){
        
        if($day != "Sun")
{
            
            if($day == "Tue" || $day == "Mon" || $day == "Wed" || $day == "Thu" || $day == "Fri")
{
	
                $cnt = $cnt +1;
	
echo "<br/>";
	echo "<table class=\"disptable5\" border=1 align=center>";
            echo"<tr><td>$start_date</td>" . "<td>$day</td>"."<td>$Coures_code</td>"."    <td>1</td></tr>";
            
	echo "</table>";
	
            $Max=$Max - 1;
	
            if ($Max == 0)
{
	echo "<br/>";
                echo "<pre>"."\nslot alloted\n"."</pre>";
                echo "<pre>"."\n Total alloted time is $cnt Hours\n"."</pre>";
                exit(0);
}
            
}
}
}	
        echo "\n";
        $start_date = date ("Y/m/d", strtotime("+1 days", strtotime($start_date)));echo "</table>";
}
?>
</body></html>