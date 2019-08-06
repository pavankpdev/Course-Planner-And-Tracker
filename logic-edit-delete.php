<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

//header('Content-Type: application/json');

include('db-connect2.php');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') 
{	
	$sql = "UPDATE ct SET Unit_no='" . $input['Unit_no'] . "',Title_name='" . $input['Title_name'] . "',Subdivision='" . $input['Subdivision'] . "',Date_planned='" . $input['Date_planned'] . "',Hours='" . $input['Hours'] . "',Date_complition='" . $input['Date_complition'] . "',Methodology='" . $input['Methodology'] . "',Learning_outcomes_achieved='" . $input['Learning_outcomes_achieved'] . "'"." WHERE id='" . $input['id'] . "'";  
    mysqli_query($con,$sql);
} 
if ($input['action'] === 'delete') 
{
    mysqli_query($con,"DELETE FROM ct   WHERE id='" . $input['id'] . "'");
} 


mysqli_close($mysqli);

echo json_encode($input);
?>
