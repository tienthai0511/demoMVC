<?php require_once(VIEW_ADMIN.'head.inc.php'); ?>
<script>
	function editPage(id, action , page){
		document.fForm.id.value = id;
		document.fForm.act.value = action;
		document.fForm.action = page;
		document.fForm.submit(true);
	}
</script>
<script type="text/javascript">

function changeActive(id){
  //alert($(this).text());
    var data = {
      "action": "test"
    };
	b = '192';
	a = {'id':b };
    data = $.param(a) + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "/tpadmin/api/demoa.php", //Relative or absolute path to response.php file
      data: data,
		beforeSend: function() {
		// setting a timeout
			//$(placeholder).addClass('loading');la
			NProgress.start();
		},
		success: function(data) {
		// alert(data.ok);
		// alert(data.name);
			$('#active_'+id).text("aaa");
			NProgress.done();
			$('.fade').removeClass('out');
		} ,
		error: function(e){
			alert("");
		}
	});
	return false;
  }
$(document).ready(function(){
	$("#b40").click(function() { 

		
		// setTimeout(function() {  }, 100);
	});
});
</script>

<form action="" method="post" name="fForm">
	<!--Paging-->
	<?php	echo showPaging($posts['total'], count($posts['data']), $PageList); ?>
	<span class="demo_ajax">aaa</span>
	<table width="100%" id="tbData">
	
		<thead>
			<tr>
				<th width="40px"><a href="#">ID</a></th>
				<th><a href="#">Tên</a></th>
				<th width="120px">Giao hàng</th>
				<th width="120px">Trạng thai</th>
				<th width="60px">Thao tac</th>
			</tr>
		</thead>

		<tbody>
		<?php if (count($posts['data']) > 0) {?> 
		<?php	foreach($posts['data'] as $post): ?>
		<?php $id = $post->idDH ;?>
			<tr>
				<td align="center"><?php echo $id;?></td>
				<td><?php echo $post->Name;?></td>
				<td align="center"><?php echo $post->Created;?></td>
				<?php if ($post->TinhTrang == 1){ ?>
					<td align="center"><span style="color:green; font-weight:bold" id="active_<?php echo $id;?>" onclick="changeActive(<?php echo $id;?>)">Kich ho?t</span></td>
				<?php } else {?>
					<td align="center"><span style="color:black; font-weight:normal" id="active_<?php echo $id;?>" onclick="changeActive(<?php echo $id;?>)">Active</span></td>
				<?php }?>
				<td align="center">	
					<a href="javascript:editPage(<?php echo $id;?>,'edit','edit.php')">
					<img src="/imgAdmin/img/icons/edit.png" title="S?a" width="16" height="16"></a>
					<a href="javascript:editPage(<?php echo $id;?>,'deltete','delete.php')"><img src="/imgAdmin/img/icons/delete.png" title="Xoa" width="16" height="16"></a>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php } else {?>
			<tr><td>Khong co ?? li?u</td></tr>
		<?php }?>
		</tbody>
	</table>
	<!--Paging-->
	<?php	echo showPaging($posts['total'], count($posts['data']), $PageList); ?>
	<input type="hidden" name="id" value=""/>
	<input type="hidden" name="act" value=""/>
</form>