<?php 

require('../application/inc/config.php');
require('../application/inc/define.php');
include('JSON.php');
require(SYS .'controller.php');
require(SYS .'model.php');
require(MODEL_ADMIN .'Product.php');


	$id = 13;
		$example = new User();
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
