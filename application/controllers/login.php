<?php
$actual_link =  $_SERVER["REQUEST_URI"];
 var_dump($actual_link);
class Login extends Controller {


	function index()
	{
	echo 1;

	
		$_SESSION['a'] = 1;
		

		if(isset($_POST['login'])){
		
			$user = mysql_escape_string($_POST['username']);
			$pass = mysql_escape_string($_POST['password']);
			if ($user && $pass) {
				$example = $this->loadModel('useridentity');
				$userData = $example->checkLogin($user, $pass );

				if (is_array($userData) && count($userData) > 0) {
				
					$DATALOGIN->USER_ID = $userData[0]->id;
					$DATALOGIN->USER_NAME = $userData[0]->Name;
					$DATALOGIN->USER_DISP = $userData[0]->DispName;
					$DATALOGIN->SESSION_KEY = $userData[0]->Sessionkey;
					#header("Location: /product/index");
			
					$_SESSION['a'] = 1;
				
				} 
			}
		
		}
		
		
		
		$template = $this->loadView('login');
		$template->render();
	}
    
}

?>
