<?php 

require_once('../../includes/config.inc.php');

require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');





if (is_ajax()) {
	if (isset($_POST["action"]) && !empty($_POST["action"])) {
		$action = $_POST["action"];
		switch($action) { 
			case "test": test_function(); 
				break;
			default : 
				break;

		}
	}
}

function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
 
function test_function(){
	require(MODEL_ADMIN .'Product.php');
	$category = new Category();
	$id = intval($_POST['id']);
	if ($id) {
		$title = "eee";
		#$sql = sprintf("UPDATE $category->_table SET Name ='%s' where id = %d", $title , $id);
		#$resutl = $category->setExecuteDml($sql);
		/*$dataEdit =  $category->getById($id);
		$dataEdit = $dataEdit[0];
		*/
		
		 $return["json"] = "not";
		#$name = $dataEdit->Name;
		 $return["name"] =$sql;
	//  $return["json"] = $name;
	  $return["ok"] =  $resutl;
		echo json_encode($return);
		die();
		exit; 
	}
	else {
		 $return["ok"] ='error';
		 $return["name"] ='a';
		  $return["json"] = json_encode( $return);
		  echo json_encode($return);
		  die();
		  exit;
	}
}
?>