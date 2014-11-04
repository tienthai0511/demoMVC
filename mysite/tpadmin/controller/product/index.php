<?php 

// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');

require_once(FUNCTION_PATH . 'paginator.php');
$controller = "product";
$title_table = "Quản lý sản phẩm";

    $a = new Product();

#$a->id = ;
$page = $_GET['pag'];
$test = new Paginator();


	$pag = (isset($_GET['page']) && $_GET['page'] > 0) ? ($_GET['page'] - 1) : 0;
	
	$posts = $a->getAll(NULL,$pag*ROW_PER_PAGE, ROW_PER_PAGE);

	$test->total_records = $posts['total'];//$posts['total'];
	$test->records = ROW_PER_PAGE;
	$test->class = 'pagination111';

	$test->paginate();

	$PageList = ($posts['total'] > ROW_PER_PAGE) ? $test->show() : "";

	#$a->delete();
	/*$a->name = 'demoaadasdadasaaaaaaa';
	$a->active = 1;
	$a->delete = 0;
	$a->delete = 0;
	$a->save();*/
	#$condition = "delete_flag = 0";

// Get posts from database


// Include page view
require_once(VIEW_ADMIN.'product/index.php');
require_once(VIEW_ADMIN.'footer.inc.php');
