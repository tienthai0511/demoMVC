<?php require_once(VIEW_ADMIN.'head.inc.php'); ?>
<script>
	function editPage(id, action , page){
		document.fForm.id.value = id;
		document.fForm.act.value = action;
		document.fForm.action = page;
		document.fForm.submit(true);
		
	}
	function save(id, action , page){
		document.fForm.id.value = id;
		document.fForm.act.value = action;
		document.fForm.action = page;
		document.fForm.submit(true);
		
	}
</script>
<script>
	$(document).ready(function(){
	$('.calendar').datetimepicker({
		dateFormat: 'dd-mm-yy',
	});
	});
	// Bind to the change event of our file input
$(document).ready(function(){
	(function(){
		var fileInput = document.getElementById('image-input');
		var image = document.getElementById('loadImg');

		$("input[name='ImageFile']").on("change", function(){
			var fileUrl = window.URL.createObjectURL(fileInput.files[0]);
			image.src = fileUrl;
		});
	})();
});
// The instanceReady event is fired, when an instance of CKEditor has finished
// its initialization.


</script>
<script>
$(document).ready(function(){
	/*	CKEDITOR.replace( 'editor1', {
   fullPage: true,

				allowedContent: true,

				extraPlugins: 'wysiwygarea'


});*/
var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl : '/admin/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '/admin/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '/admin/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	
});
//CKFinder.setupCKEditor( editor, '/public/content/' );
});

		</script>
		<script type="text/javascript">
function BrowseServer()
{
   // You can use the "CKFinder" class to render CKFinder in a page:
   var finder = new CKFinder();
   finder.basePath = '/ckfinder/';   
   finder.selectActionFunction = SetFileField;
   finder.SelectFunction = 'ShowFileInfo';
   finder.popup();
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
   document.getElementById( 'xFilePath' ).value = fileUrl;
}

</script>
<?php echo UPLOAD_PATH_IMAGES;?>
<form id="form" name="fForm" method="post" enctype="multipart/form-data">
	<fieldset id="personal">
		<legend>Thông sản phẩm</legend>
		<span class="title">Tên : </span> 
		<input name="Name" value="<?php echo $dataEdit->name; ?>" id="Name" type="text" tabindex="1">
		<br>
	
            </textarea>
               
				</br>
		<span class="title">N: </span> 
		<textarea cols="100" id="editor1" name="editor" rows="10"></textarea>
		<br>
		<div class="clear mb10"></div>
		<span class="title">Trạng thái : </span>
		<label for="no">Hiện</label>
		<input style="vertical-align: middle; margin-top: 5px;" <?php if ($dataEdit->Active == 1) echo "checked='checked'";?>name="Active" id="no" type="radio" value="0" tabindex="35">
		<label for="yes">Ẩn</label>
		<input style="vertical-align: middle; margin-top: 5px;" name="Active"  <?php if ($dataEdit->Active == 0) echo "checked='checked'";?> id="yes" type="radio" value="1" tabindex="35">
		<br>		
		<span class="title">Hình ảnh</span>
		
		<input type="file" name="ImageFile" id="image-input"/>
		<img id="loadImg" src="/imgAdmin/img/no-image.png" alt="hình ảnh" width="100" height="100"/>
		<br>
		<br>
		<h1>
      CKFinder - Sample - Popup<br />
   </h1>
   <p>
      Selected File URL<br />
      <input id="xFilePath" name="FilePath" type="text" size="60" />
      <input type="button" value="Browse Server" onclick="BrowseServer();" />
   </p>
	</fieldset>
	<div align="center">
	<input id="button1" type="button" onclick="editPage(<?php echo $dataEdit->id; ?>,'edit','edit.php');" value="Luu"> &nbsp;&nbsp; 	  
	<input id="button1" type="button" value="Quay l?i" onclick="history.go(-1)">
	</div>

	<input type="hidden" name="id" value=""/>
	<input type="hidden" name="act" value=""/>
	<input type="hidden" name="save" value="1"/>
</form>
