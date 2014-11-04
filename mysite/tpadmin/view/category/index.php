<?php require_once(VIEW_ADMIN.'head.inc.php'); ?>
<script>
	function editPage(id, action , page){
		document.fForm.id.value = id;
		document.fForm.act.value = action;
		document.fForm.action = page;
		document.fForm.submit(true);
	}
</script>

<form action="" method="post" name="fForm">
	<!--Paging-->
	<?php	echo showPaging($posts['total'], count($posts['data']), $PageList) ?>
	<table width="100%" id="tbData">
	
		<thead>
			<tr>
				<th width="40px"><a href="#">ID</a></th>
				<th><a href="#">Tên</a></th>
				<th width="120px">Ngày Tạo</th>
				<th width="120px">Trạng thái</th>
				<th width="60px">Thao tác</th>
			</tr>
		</thead>

		<tbody>
		<?php if (count($posts['data']) > 0) {?> 
		<?php	foreach($posts['data'] as $post): ?>
		<?php $id = $post->id ;?>
			<tr>
				<td align="center"><?php echo $id;?></td>
				<td><?php echo $post->Name;?></td>
				<td align="center"><?php echo $post->Created;?></td>
				<?php if ($post->Active == 1){ ?>
					<td align="center"><span style="color:green; font-weight:bold">Kích hoạt</span></td>
				<?php } else {?>
					<td align="center"><span style="color:black; font-weight:normal">Ẩn</span></td>
				<?php }?>
				<td align="center">	
					<a href="javascript:editPage(<?php echo $id;?>,'edit','edit.php')">
					<img src="/imgAdmin/img/icons/edit.png" title="Sửa" width="16" height="16"></a>
					<a href="javascript:editPage(<?php echo $id;?>,'deltete','delete.php')"><img src="/imgAdmin/img/icons/delete.png" title="Xóa" width="16" height="16"></a>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php } else {?>
			<tr><td>Không có đữ liệu</td></tr>
		<?php }?>
		</tbody>
	</table>
	<!--Paging-->
	<?php	echo showPaging($posts['total'], count($posts['data']), $PageList) ?>
	<input type="hidden" name="id" value=""/>
	<input type="hidden" name="act" value=""/>
</form>