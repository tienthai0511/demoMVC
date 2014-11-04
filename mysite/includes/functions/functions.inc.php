<?php


function redirect_to($url) {

	if (isset($url)) {
		header("Location: " . $url);
	}
}

function sanitize_output($string) {
	return htmlspecialchars($string);
}
function showHello($user, $view)
	{
		$strList = "";
		if(!$user)
			return;
		
		$strList .= "<div class='hello'>
						Xin chào <span style='color:red;'>$user</span> | 
						<a href='/auth/changepassword'>Thay đổi mật khẩu</a> | 
						<a href='/auth/logout'>Thoát</a>
					</div>";
		
		echo $strList;
}
function showPaging($total, $showCurrent, $PageList){
	if ($total <= 0 || $showCurrent <= 0 || $PageList == "") return ;
		$string =	"<table border='1px'>
						<tbody>
							<tr><td width='110' class='paging border_none t-left'><span class='paging-records'>Hiện {$showCurrent} / {$total}</span></td>
							<td class='paging border_none'>$PageList</td></tr>
							</tbody>
						</table>";
	return $string;
}
function topMenu($view)
	{
		$selectUser = $selectGroup = $selectTool = $selectShopeditor = $selectEvent=
		$selectGift = $selectQuest = $selectQuest ="";
		switch ($view)
		{
			case 'category':
				$selectUser = 'current';
				break;
			case 'product':
				$selectGroup = 'current';
				break;
			case 'order':
				$selectOrder = 'current';
				break;
            case 'shopeditor':
                $selectShopeditor = 'current';
                break;    
			case 'event':
				$selectEvent = 'current';
				break;
			case 'gift':
				$selectGift = 'current';
				break;
			case 'quest':
				$selectQuest = 'current';
				break;
			case 'questline':
				$selectQuest = 'current';
				break;		
		}
		$strList = "";
		$strList .= "<div id='topmenu'>
						<ul>";
			$strList .= "<li class='$selectUser'><a href='/admin/category/'>Người dùng</a></li>";	

			$strList .= "<li class='$selectGroup'><a href='/admin/product/'>Sản phẩm</a></li>";

			$strList .= "<li class='$selectOrder'><a href='/admin/order/'>Đơn hàng</a></li>";

		$strList .=		"</ul>
					</div>";
		
		echo $strList;
	}
	
	
// This function will proportionally resize image 
function resizeImage($CurWidth,$CurHeight,$MaxSize,$DestFolder,$SrcImage,$Quality,$ImageType)
{
	//Check Image size is not 0
	if($CurWidth <= 0 || $CurHeight <= 0) 
	{
		return false;
	}
	
	//Construct a proportional size of new image
	$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 
	$NewWidth  			= ceil($ImageScale*$CurWidth);
	$NewHeight 			= ceil($ImageScale*$CurHeight);
	$NewCanves 			= imagecreatetruecolor($NewWidth, $NewHeight);
	
	// Resize Image
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))
	{
		switch(strtolower($ImageType))
		{
			case 'image/png':
				imagepng($NewCanves,$DestFolder);
				break;
			case 'image/gif':
				imagegif($NewCanves,$DestFolder);
				break;			
			case 'image/jpeg':
			case 'image/pjpeg':
				imagejpeg($NewCanves,$DestFolder,$Quality);
				break;
			default:
				return false;
		}
	//Destroy image, frees memory	
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;
	}

}

//This function corps image to create exact square images, no matter what its original size!
function cropImage($CurWidth,$CurHeight,$iSize,$DestFolder,$SrcImage,$Quality,$ImageType)
{	 
	//Check Image size is not 0
	if($CurWidth <= 0 || $CurHeight <= 0) 
	{
		return false;
	}
	
	//abeautifulsite.net has excellent article about "Cropping an Image to Make Square bit.ly/1gTwXW9
	if($CurWidth>$CurHeight)
	{
		$y_offset = 0;
		$x_offset = ($CurWidth - $CurHeight) / 2;
		$square_size 	= $CurWidth - ($x_offset * 2);
	}else{
		$x_offset = 0;
		$y_offset = ($CurHeight - $CurWidth) / 2;
		$square_size = $CurHeight - ($y_offset * 2);
	}
	
	$NewCanves 	= imagecreatetruecolor($iSize, $iSize);	
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, $x_offset, $y_offset, $iSize, $iSize, $square_size, $square_size))
	{
		switch(strtolower($ImageType))
		{
			case 'image/png':
				imagepng($NewCanves,$DestFolder);
				break;
			case 'image/gif':
				imagegif($NewCanves,$DestFolder);
				break;
			case 'image/jpeg':
			case 'image/pjpeg':
				imagejpeg($NewCanves,$DestFolder,$Quality);
				break;
			default:
				return false;
		}
	//Destroy image, frees memory
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;

	}

	}

	
function _randGen($min = null, $max = null) {
	static $seeded;	if (!isset($seeded)) {
		mt_srand((double)microtime()*1000000);
		$seeded = true;
	}
	if (isset($min) && isset($max)) {
		if ($min >= $max) {
			return $min;
		} else {
			return mt_rand($min, $max);
		}
	} else {
		return mt_rand();
	}
}
function _encrypt_password($plain) {
	$password = '';
	for ($i=0; $i<10; $i++) {
		$password .= _randGen();
	}
	$salt = substr(md5($password), 0, 2);
	$password = md5($salt . $plain) . ':' . $salt;
	return $password;
}
function _validate_password($plain, $encrypted) {
	if ($plain && $encrypted) {
		// split apart the hash / salt
		$stack = explode(':', $encrypted);
		if (sizeof($stack) != 2) return false;
		if (md5($stack[1] . $plain) == $stack[0]) return true;
	}
	return false;
}