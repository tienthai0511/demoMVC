<?php 

// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');
require_once(FUNCTION_PATH . 'functions.inc.php');
$controller = "category";
$controller_menu = "current";
	$category = new Category();

	$act = $_POST['act'];
	$id = (isset($_POST['id']) && (int)$_POST['id'] > 0) ? $_POST['id'] : -1;
	if (!$act) {
		redirect_to(".");
	}

	if ($id && $act == 'edit') {

		if (isset($_POST['save'])){
			
		} else {
			$dataEdit =  $category->getById($id);
			$dataEdit = $dataEdit[0];
		}
		
		
		
	} else if ($act == 'insert' && $id < 0){
		
		$category->id = -1;
		$category->name = "de mo";
		$category->active =1;
		$category->delete =1;
#$category->save();
		
		($category->save());
	}
	
	

	
// Get posts from database


// Include page view

require_once(VIEW_ADMIN.'category/edit.php');
require_once(VIEW_ADMIN.'footer.inc.php');
