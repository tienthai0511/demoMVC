<?php include(HELPERS . 'header.php');?>
<script>

	$(document).ready(function() {
	//var url = 'ajax';
	

	/*$('.demo_ajax').on('click',function(){
		var url = 'del';
	data ={'id':'13'};
	$.post(url,data,
			function(data) {
				 if (data.res == 13) {
					$('.demo_ajax').html("ewe");
				 }
			}
		,'json');

	});*/
	$('.demo_ajax').on('click',function(){
		var url = '/api/demo.php';
		alert(url);
	data ={'id':'13'};
	$.post(url,data,
			function(data) {
				 alert(data.res);
				
			}
		,'json');

	});
} );
</script>

    <div id="content">

	<!-- sidebar-->
	<?php require_once(HELPERS . 'menu_helper.php');?>
	<!-- sidebar-->
	<div id="rightSide">
		<div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="/public_html/images/icons/userPic.png" alt=""></a><span>Xin chào , <label style="color:#82A63B;font-weight:bold">Thái Vũ</label></span></div>
            <div class="userNav">
                <ul>
					<li><a href="#" title=""><img src="/public_html/images/icons/profile.png" alt=""><span>Profile</span></a></li>
					<li><a href="#" title=""><img src="/public_html/images/icons/settings.png" alt=""><span>Settings</span></a></li>
					<li><a href="login.html" title=""><img src="/public_html/images/icons/logout.png" alt=""><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
		<span class="demo_ajax">demo</span>
		<div class="searchWidget">
		<form action="">
                        <input type="text" name="search" placeholder="Enter search text...">
                        <input type="submit" name="find" value="">
                    </form>
					</div>
		<form class="form">
		
		<div class="main_view">
		


		<fieldset>
			
			<!--wwidget -->
			<div class="widget">
                    <div class="title">
					<a href="#"><img src="/public_html/images/icons/add.png" alt="" class="titleIcon tooltip" original-title="Thêm mới"/></a>
					
					<h6>Quản lý hóa đơn</h6>
					<div class="clear"></div>
					</div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable" id="sTable">
                        <thead>
                            <tr>
                                <td align="left" class="t-center">ID</td>
                                <td>Description</td>
								<td width="10" class="t-center">Flag</td>
                                <td width="58" class="t-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
						<?php if(isset($dataList) && count($dataList) > 0) { 
							for ($i = 0; $i < count($dataList); $i++) :
						?>
							<tr>
								<td class="t-center"><?php echo $dataList[$i]->id; ?></td>
								<td><?php echo $dataList[$i]->content; ?></td>
								<td class="t-center ">
									<img class="tooltip" width="16" height="16" src="/public_html/images/iconsAdmin/flag_deactive.png" original-title="Ẩn"/>
								</td>
								<td class="t-center cusor-p">
									<a href="edit?act=edit&id=<?php echo $dataList[$i]->id; ?>"><img class="mr-2 tooltip" width="16" height="16" src="/public_html/images/iconsAdmin/edit.png" original-title="Sửa"/></a>
									<a href="delete?act=del&id=<?php echo $dataList[$i]->id; ?>"><img class="tooltip cusor-p" width="16" height="16" src="/public_html/images/iconsAdmin/delete.png" original-title="Xóa"/></a>
								</td>

							</tr>
						<?php 
							endfor;
						} else {
						?>
							<tr>
                                <td align="center">Không có dữ liệu</td>
                                
                            </tr>
						<?php } ?>
                        </tbody>
                    </table> 
					<div class="clear"></div>
				
                </div>
				<div class="paging"><?php if($pagingList) { echo $pagingList;} ?></div>
			<!--wwidget -->
			</fieldset>
		</div>
		
		</form>
    </div>
		<div class="clear"></div>
	</div>
	<script>

	console.log(parseFloat(Math.round(4.56892039 * 100) / 100).toFixed(2));
// logs 4.35 in your console
	</script>
	</div>
	<?php include(HELPERS . 'footer.php');?>
