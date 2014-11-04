<?php require_once(VIEW_PATH.'header.inc.php'); ?>

	<form method="POST" action="<?php 
		echo sanitize_output($_SERVER['REQUEST_URI']);?>">

		<p>						
			<label for="title">Title</label><br />									
			<input id="title" name="title" type="text" size="75" value="<?php 
				echo sanitize_output($title); ?>" autofocus/></p>

		<p>
			<label for="content">Content</label><br />
			<textarea id="content" name="content"><?php 
				echo sanitize_output($content);?></textarea></p>
		
		<p>
			<input type="submit"/></p>

	</form>

<?php require_once(VIEW_PATH.'footer.inc.php'); ?>