<?php 

// Initialize site configuration
require_once('../../../includes/config.inc.php');
require_once(LIB_PATH . 'BaseAdminController.php');
require_once(LIB_PATH . 'BaseModel.php');
require_once(FUNCTION_PATH . 'functions.inc.php');

$_SESSION['IsAuthorized'] = true;
var_dump($_SESSION['IsAuthorized'] );

$controller = "product";
$controller_menu = "current";
$title_table = "Chỉnh sửa sản phẩm";
	$category = new Product();

	$act = $_POST['act'];
	$id = (isset($_POST['id']) && (int)$_POST['id'] > 0) ? $_POST['id'] : -1;
	if (!$act) {
		redirect_to(".");
	}

	if ($id && $act == 'edit') {

		if (isset($_POST['save'])){
		//
			############ Edit settings ##############
			$ThumbSquareSize 		= 150; //Thumbnail will be 200x200
			$BigImageMaxSize 		= 400; //Image Maximum height or width
			$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
			$DestinationDirectory	= UPLOAD_PATH_IMAGES; //specify upload directory ends with / (slash)
			$Quality 				= 90; //jpeg quality
			##########################################
			if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
			{
					die('Something wrong with uploaded file, something missing!'); // output error when above checks fail.
			}
			// Random number will be added after image name
	$RandomNumber 	= rand(0, 9999999999); 

	$ImageName 		= str_replace(' ','-',strtolower($_FILES['ImageFile']['name'])); //get image name
	$ImageSize 		= $_FILES['ImageFile']['size']; // get original image size
	$TempSrc	 	= $_FILES['ImageFile']['tmp_name']; // Temp name of image file stored in PHP tmp folder
	$ImageType	 	= $_FILES['ImageFile']['type']; //get file type, returns "image/png", image/jpeg, text/plain etc.

	//Let's check allowed $ImageType, we use PHP SWITCH statement here
	switch(strtolower($ImageType))
	{
		case 'image/png':
			//Create a new image from file 
			$CreatedImage =  imagecreatefrompng($_FILES['ImageFile']['tmp_name']);
			break;
		case 'image/gif':
			$CreatedImage =  imagecreatefromgif($_FILES['ImageFile']['tmp_name']);
			break;			
		case 'image/jpeg':
		case 'image/pjpeg':
			$CreatedImage = imagecreatefromjpeg($_FILES['ImageFile']['tmp_name']);
			break;
		default:
			die('Unsupported File!'); //output error and exit
	}
	list($CurWidth,$CurHeight)=getimagesize($TempSrc);
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
  	$ImageExt = str_replace('.','',$ImageExt);
	
	//remove extension from filename
	$ImageName 		= preg_replace("/\\.[^.\\s]{3,4}$/", "", $ImageName); 
	
	//Construct a new name with random number and extension.
	$NewImageName = $ImageName.'-'.$RandomNumber.'.'.$ImageExt;
	
	//set the Destination Image
	$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumbnail name with destination directory
	$DestRandImageName 			= $DestinationDirectory.$NewImageName; // Image with destination directory
	if(resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
	{
		//Create a square Thumbnail right after, this time we are using cropImage() function
		if(!cropImage($CurWidth,$CurHeight,$ThumbSquareSize,$thumb_DestRandImageName,$CreatedImage,$Quality,$ImageType))
			{
				echo 'Error Creating thumbnail';
			}
		
		/*
		We have succesfully resized and created thumbnail image
		We can now output image to user's browser or store information in the database
		*/
		echo '<table width="100%" border="0" cellpadding="4" cellspacing="0">';
		echo '<tr>';
		echo '<td align="center"><img src="/public/images/'.$ThumbPrefix.$NewImageName.'" alt="Thumbnail"></td>';
		echo '</tr><tr>';
		echo '<td align="center"><img src="/public/images/'.$NewImageName.'" alt="Resized Image"></td>';
		echo '</tr>';
		echo '</table>';

		/*
		// Insert info into database table!
		mysql_query("INSERT INTO myImageTable (ImageName, ThumbName, ImgPath)
		VALUES ($DestRandImageName, $thumb_DestRandImageName, 'uploads/')");
		*/

	}else{
		die('Resize Error'); //output error
	}
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

require_once(VIEW_ADMIN.'product/edit.php');
require_once(VIEW_ADMIN.'footer.inc.php');
