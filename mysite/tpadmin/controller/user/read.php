<?php

// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');

print_r(LIB_PATH . 'BaseAdminController.php');
print_r(MODEL_ADMIN . 'BaseAdminController.php');
echo 1;
// Check the querystring for a numeric id
if (isset($_GET['id']) && intval($_GET['id']) > 0) {
	
	// Get id from querystring
	$id = $_GET['id'];
	
	$a = new News();
	$post = $a->getById($id);
	print_r($post);
	
} else {

	// Redirect to site root
	redirect_to('.');
}

// Include page view
require_once(VIEW_ADMIN.'user/read.view.php');

require_once(VIEW_ADMIN.'footer.inc.php');
