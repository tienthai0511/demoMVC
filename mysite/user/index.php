<?php 

// Initialize site configuration
require_once('../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');
require_once(LIB_PATH . 'view.php');


try {

    $a = new News();
	
	$a->id = 15;

	$a->delete();
	$posts = $a->getAll();
print_r($posts);

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

		#$template->render();
// Get posts from database


// Include page view
require_once(VIEW_PATH.'user/index.view.php');