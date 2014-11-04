<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="SHORTCUT ICON" href="/helper/admin/img/icons/short-icon.ico"/>
<title><?php echo "$title_table |Admin";?></title>
<link href="/helper/admin/css/style.css" rel="stylesheet" type="text/css">
<link href="/helper/admin/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="/helper/admin/css/nprogress.css" rel="stylesheet" type="text/css">
<script src="/helper/admin/js/jquery.min.js" type="text/javascript"></script>
<script src="/helper/admin/js/nprogress.js" type="text/javascript"></script>
<script src="/helper/admin/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/helper/admin/js/jquery-ui-timepicker-addon.js" type="text/javascript" ></script>
<script src="/helper/admin/js/jquery-ui-timepicker-addon-i18n.min.js" type="text/javascript" ></script>
<script src="/admin/ckeditor/ckeditor.js" type="text/javascript" ></script>
<script src="/admin/ckeditor/config.js" type="text/javascript" ></script>
<script src="/admin/ckfinder/ckfinder.js" type="text/javascript" ></script>


</head>
<body>
<div id="container"> 
	<div id="header">
		<h2 class="header-title-admin"><img style="vertical-align: middle" height="64" width="64" src="/helper/admin/img/admin-min-icon.png">Trang quản trị</h2>
		<?php echo topMenu($controller);?>
		<?php echo showHello("Thái","test");?>
	</div>
	<?php echo topPanel($controller, 'test');?>

	<div id="wrapper">
	<div id="content">
	<div id="box">
	<h3><?php if(isset($title_table))  echo $title_table;?></h3>
