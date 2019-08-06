<?php
	
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<?php
$conn = mysqli_connect("localhost","root","","cpt");
require_once('excel_reader2.php');
require_once('SpreadsheetReader.php');


if (isset($_POST["import"]))
{
    
    
  $allowedFileType =" ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']";
  
  if($conn){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $Staff_id = "";
                if(isset($Row[0])) {
                    $Staff_id = mysqli_real_escape_string($conn,$Row[0]);
                }
	$Course_code = "";
                if(isset($Row[1])) {
                    $Course_code = mysqli_real_escape_string($conn,$Row[1]);
                }
                
                	$Unit_no = "";
                if(isset($Row[2])) {
                    $Unit_no = mysqli_real_escape_string($conn,$Row[2]);
                }
	$Title_name = "";
                if(isset($Row[3])) {
                    $Title_name = mysqli_real_escape_string($conn,$Row[3]);
                }
	$Subdivision = "";
                if(isset($Row[4])) {
                    $Subdivision = mysqli_real_escape_string($conn,$Row[4]);
                }
	$Date_planned = "";
                if(isset($Row[5])) {
                    $Date_planned = mysqli_real_escape_string($conn,$Row[5]);
                }
	$Hours = "";
                if(isset($Row[6])) {
                    $Hours = mysqli_real_escape_string($conn,$Row[6]);
                }
	$Date_complition = "";
                if(isset($Row[7])) {
                    $Date_complition = mysqli_real_escape_string($conn,$Row[7]);
                }
	$Methodology = "";
                if(isset($Row[8])) {
                    $Methodology = mysqli_real_escape_string($conn,$Row[8]);
                }
                
	$Learning_outcomes_achieved = "";
                if(isset($Row[9])) {
                    $Learning_outcomes_achieved = mysqli_real_escape_string($conn,$Row[9]);
                }
	
                if (!empty($Staff_id) || !empty($Course_code) || !empty($Unit_no) || !empty($Title_name) || !empty($Subdivision) || !empty($Date_planned) || !empty($Hours) || !empty($Date_complition) || !empty($Methodology) || !empty($Learning_outcomes_achieved)) {
                    $query = "insert into ct(Staff_id,Course_code,Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodology,Learning_outcomes_achieved) values('".$Staff_id."','".$Course_code."','".$Unit_no."','".$Title_name."','".$Subdivision."','".$Date_planned."','".$Hours."','".$Date_complition."','".$Methodology."','".$Learning_outcomes_achieved."')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Sucessfully Uploded";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    


.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}


#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
<?php require_once 'head.php'; ?>
<?php include 'header.php';?>
</head>
<body>


<div class="pageContentWrapper">
	<div class="row">
		<div class="container">		
			
		<?php include 'menu.php';?>
			<br>
			<div class="box box-primary">
			
	            <div class="box-header with-border" align="center">
	              <h3 class="box-title" >Import XL</h3>
	           
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         


</body>
</html>