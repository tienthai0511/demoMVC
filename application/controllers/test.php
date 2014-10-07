<?php
require_once(INC . 'header_admin.php');
class Test extends Controller {
	
	public function index()
	{

	
	
echo "controller_test";
exit;

	$test = new Paginator();

	$test->total_records = 50;
	$test->class = 'pagination111';
	$test->specific_get = array();
	$test->paginate();
	$b = $test->show();
	#var_dump($b);
		/*$example = $this->loadModel('user');
		 $something = $example->getSomething();
		 $example->insert();
		 
		 
		 $example->title = 14;
		 $example->insert();
		 print_r($something);*/
	$base_dir  = __DIR__; // Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
$base_url  = preg_replace("!^{$doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'];
$full_url  = "$protocol://{$domain}{$disp_port}{$base_url}"; 
#print_r($full_url);
		 
		#$template = $this->loadView('user/main_view');
		#$function = $this->loadHelper('url_helper');
		#$a = $function->segment(2);
		#print_r($a);
#		 $template->set('someval', $base_dir);
		 #$template->set('bt', "moing");
		 #$function1 = $this->loadHelper('paginator');
		# $function = new Paginator();
		# $function->total_records = 50; // Total records
		 #$function->url_start = $full_url; // Total records
		 #print_r($function->url_start);
#$function->class = 'pagination111'; // Specify div class
#$function->specific_get = array();

# $template->set('someval',$b);
 // Showing all links
 #print_R($segments[1]);
#$url = substr($query_string[0], -1), array('?', '&');

 
		$template->render();return false;
	}
	public function add() {

		include(HELPERS . 'paginator.php');
	
	$test = new Paginator();
	$test->total_records = 10;
	$test->records = 4;
	$test->class = 'pagination111';
	$test->specific_get = array();
	$test->url_start = 'http://mywebsite.com/subdir/pag';
	$test->url_end = 'http://mywebsite.com/subdir/pag';
	$test->paginate();
	$pagingList = $test->show();
	
		$titlePage = "Trang quản trị";		
		$example = $this->loadModel('user');		
		#$User = $this->loadModel('useridentity');
		#$User->username = 0000;
#$User->_id = 16;
		#$UserIdentityData = $User->getRealName();
	#	$Role = $User->getRole();
	#	var_dump($Role);
		#print_r($UserIdentityData);
		$dataList = $example->getSomething();					
		# $example->title = "Trong 103 năm tại thế, Đại tướng Võ Nguyên Giáp đã trở thành điểm tựa tinh thần cho người dân Việt Nam"; #$example->content="OK";		# $example->insert();		#paging 				 $function1 = $this->loadHelper('paginator');		 $function = new Paginator();		 $function->total_records = 50; // Total records		 #$function->url_start = $full_url; // Total records		 #print_r($function->url_start);$function->class = 'pagination111'; // Specify div class$function->specific_get = array();$function->paginate(); // refresh and update all calcs and settings$b = $function->show();var_dump($b);
				
		$template = $this->loadView('user/list');
		$template->set('titlePage', $titlePage);		
		$template->set('dataList', $dataList);		$template->set('pagingList', $pagingList);
		$template->render();

	}
   /* public function del(){
	$id = $_POST['id'];
		$example = $this->loadModel('user');
		$example->id = $id;
		 $something = $example->getId($id);
		 
		 for($i = 0 ; $i<count($something) ;$i++){
			$a[] = $something[0]->id;
		 }
		

		$json = new Services_JSON; 
		$data['res'] = $a[0];
		$encode = $json->encode($data);
		die($encode);
		exit;
	}*/
	public function del(){
	
		$example = $this->loadModel('useridentity');
		$user = 'thaivt';
		$pass = 'thaivt';
		 $something = $example->checkLogin($user, $pass );
		 $id = $something[0]->id;
		 print_R($id);
		 $Role = $example->getRole($id);
		 print_R($Role);
		 
		#var_dump($something);
		exit;
	}
	 public function a1212(){
		if (!isset($_GET['id']) || !isset($_GET['act'])) {
			echo "loại";
		} else {
			$id = intval($_GET['id']);
			$action = $_GET['act'];
		}
		if (!$id) {
			echo "no $action";
		} else {
			echo "ok";
		}
	}
	public function edit(){
		print_r($_GET);
	}
}

?>
