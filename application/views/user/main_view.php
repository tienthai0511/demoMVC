<?php include(HELPERS . 'header.php');?>


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
		<form class="form">
		
		<div class="main_view">
		<fieldset>
			
			<!--wwidget -->
			<div class="widget">
                   <div class="title">
				<img src="/public_html/images/icons/add.png" alt="Thêm mới" original-title="Thêm mới" height="30" width="30" class="titleIcon tooltip">
				<h6>Lines chart</h6>
				<div class="clear"></div>
			</div>
					<div class="formRow">
						<label>Usual text input:</label>
						<div class="formRight"><input type="text" value=""></div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label for="labelFor">Label for attribute</label>
						<div class="formRight"><input type="text" id="labelFor" value=""></div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Password input</label>
						<div class="formRight"><input type="password" value=""></div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Text input with notice:</label>
						<div class="formRight"><input type="text" value=""><span class="formNote">This is a sample note</span></div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Read only input</label>
						<div class="formRight"><input type="text" readonly="readonly" value="Read only"></div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Disabled text input</label>
						<div class="formRight"><input type="text" disabled="disabled" value="Disabled field"></div>
						<div class="clear"></div>
					</div>
				  
                    
                </div>
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
