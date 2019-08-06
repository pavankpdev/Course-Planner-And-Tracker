
<?php
	
//include connection file 
	
include_once("connection.php");
	
	
$db = new dbObj();
	$connString =  $db->getConnstring();

	
$params = $_REQUEST;
	
	
$action = isset($params['action']) != '' ? $params['action'] : '';
	
$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		
$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		
$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		
$empCls->deleteEmployee($params);
	 break;
	 default:
	 
$empCls->getEmployees($params);
	 return;
	}
	
	
class Employee {
	protected $conn;
	protected $data = array();
	
function __construct($connString) {
		
$this->conn = $connString;
	}
	
	
public function getEmployees($params) {
		
		
$this->data = $this->getRecords($params);
		
		
echo json_encode($this->data);
	}
	
function insertEmployee($params) {
		
$data = array();;
		
$sql = "INSERT INTO `Staff`(Sem,Course_code,Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodolagy,Learning_outcome) VALUES('" . $params["Sem"] . "','" . $params["Course_code"] . "','" . $params["Unit_no"] . "','" . $params["Title_name"] . "','" . $params["Subdivision"] . "','" . $params["Date_planned"] . "','" . $params["Hours"] . "','" . $params["Date_complition"] . "', '" . $params["Methodolagy"] . "','" . $params["Learning_outcome"] . "')";

echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");
		
	}
	
	
	
function getRecords($params) {
		
$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		
if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        
$start_from = ($page-1) * $rp;
		
		
$sql = $sqlRec = $sqlTot = $where = '';
		
		
if( !empty($params['searchPhrase']) ) {   
			
$where .=" WHERE ";

$where .=" OR Staff_name LIKE '".$params['searchPhrase']."%' ";

$where .=" OR Staff_id LIKE '".$params['searchPhrase']."%' ";
			
$where .=" ( Sem LIKE '".$params['searchPhrase']."%' ";    
			
$where .=" OR Course_code LIKE '".$params['searchPhrase']."%' ";

$where .=" OR Year LIKE '".$params['searchPhrase']."%' ";



	   }
  
 if( !empty($params['sort']) ) {  
			
$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	 
  // getting total number records without any search


$sql = "SELECT id,Staff_name,Staff_id,Sem,Course_code,Year FROM `Staff`";		
$sqlTot .= $sql;
		
$sqlRec .= $sql;
		
		
//concatenate search sql if value exist
		
if(isset($where) && $where != '') {

			
$sqlTot .= $where;
			
$sqlRec .= $where;
		}
		
if ($rp!=-1)
		
$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		
$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		
$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		
while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		
$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateEmployee($params) {
		$data = array();
		
//print_R($_POST);die;
		
$sql = "Update `staff` set Staff_name='" . $params["edit_Staff_name"] . "',Staff_id='" . $params["edit_Staff_id"] . "',Sem='" . $params["edit_Sem"] . "',Course_code='" . $params["edit_Course_code"] . "',Year='" . $params["edit_Year"] . "' WHERE id='".$_POST["edit_id"]."'";
		

		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		
$sql = "delete from `staff` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	




