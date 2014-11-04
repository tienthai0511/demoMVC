<?php
// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');


print_r($_POST);
			$user = mysql_escape_string($_POST['username']);
			$pass = mysql_escape_string($_POST['password']);
echo 1;
				$example = new UserIdentity();
				
				$userData = $example->checkLogin($user, $pass );
				echo "<pre>";
print_r($userData);
echo "</pre>";
/*if (is_array($userData) && count($userData) > 0) {
				
					$DATALOGIN->USER_ID = $userData[0]->id;
					$DATALOGIN->USER_NAME = $userData[0]->Name;
					$DATALOGIN->USER_DISP = $userData[0]->DispName;
					$DATALOGIN->SESSION_KEY = $userData[0]->Sessionkey;
					#header("Location: /product/index");
			
					$_SESSION['a'] = 1;
				
				} */
			
		
		
		
		
require_once(VIEW_ADMIN.'login/login.php');
require_once(VIEW_ADMIN.'footer.inc.php');

