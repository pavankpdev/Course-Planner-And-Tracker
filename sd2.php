<?php
	if(!empty($_POST["save"])) {
	    $conn = mysqli_connect("localhost","root","", "lpt");
		$itemCount = count($_POST["Subdivision"]);
		$itemValues=0;
		$query = "INSERT INTO lt (Staff_id,Course_code,Subdivision,Date_planned,Hours) VALUES ";
		$queryValue = "";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["Subdivision1"][$i]) || !empty($_POST["Date_planned"][$i]) || !empty($_POST["Hours"][$i]) || !empty($_POST["Course_code"][$i]) || !empty($_POST["Staff_id"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
				$queryValue .= "('" . $_POST["Staff_id"][$i] . "','" . $_POST["Course_code"][$i] . "','" . $_POST["Subdivision"][$i] . "', '" . $_POST["Date_planned"][$i] . "', '" . $_POST["Hours"][$i] . "')";
			}
		}
		$sql = $query.$queryValue;
		if($itemValues!=0) {
		    $result = mysqli_query($conn, $sql);
			if(!empty($result)) $message = "Added Successfully.";
		}
	}
echo 
	$Message="Sucessfully inserted!";


	header("Location: config2.php?Message=" . urlencode($Message));

?>