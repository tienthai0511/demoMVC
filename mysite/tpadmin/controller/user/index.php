<?php 

// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');

    $a = new News();
print_r($_GET);
#$a->id = 15;

	#$a->delete();
	$posts = $a->getAll();

		#$template->render();
		
// Get posts from database


// Include page view

require_once(VIEW_ADMIN.'user/index.php');
require_once(VIEW_ADMIN.'footer.inc.php');
