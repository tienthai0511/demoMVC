<?php require_once(VIEW_ADMIN.'head.inc.php'); ?>
<script>
	function editPage(id, action , page){
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
</script>

<form id="form" method="post">
   <fieldset id="personal">
      <legend>Thông tin người dùng</legend>
      <span>Tên : </span> 
      <input name="Name" value="<?php echo $dataEdit->Name; ?>" id="Name" type="text" tabindex="1">
      <br>
      <span>Trạng thái : </span>
	   <label for="no">Hiện</label>
      <input style="vertical-align: middle; margin-top: 5px;" <?php if ($dataEdit->Active == 1) echo "checked='checked'";?>name="Active" id="no" type="radio" value="0" tabindex="35">
	  <label for="yes">Ẩn</label>
      <input style="vertical-align: middle; margin-top: 5px;" name="Active"  <?php if ($dataEdit->Active == 0) echo "checked='checked'";?> id="yes" type="radio" value="1" tabindex="35">
      <br>		
      <span for="pass">M?t kh?u : </span>
      <input name="calenda" id="s" class="calendar" type="text" autocomplete="off" tabindex="2">
      <br>
      <br>
   </fieldset>
   <div align="center">
      <input id="button1" type="submit" value="Luu"> &nbsp;&nbsp; 	  
      <input id="button1" type="button" value="Quay l?i" onclick="history.go(-1)">
   </div>
</form>
