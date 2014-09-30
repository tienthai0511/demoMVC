<?php

class Test extends Controller {
	
	function index()
	{
		$example = $this->loadModel('Example_model');
		 $something = $example->getSomething();
		 #$example->insert();
		 
		 $example->id = 14;
		 $example->update();
		 #print_r($something);
	
		 print_r(ROOT_DIR);
		$template = $this->loadView('user/main_view');
		 $template->set('someval', $something);
		$template->render();
	}
    
}

?>
