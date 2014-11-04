<?php require_once(VIEW_PATH.'header.inc.php'); ?>

	<h3><?php echo $post->title; ?></h3>
	
	<p>
		<?php echo $post->content; ?>
		<?php echo $post->created; ?><br />
			
		<a href="update.php?id=<?php echo $post->id; ?>">Update</a>
		<a href="delete.php?id=<?php echo $post->id; ?>" 
			onClick = "javascript: return confirm('Are you sure you want to delete?');">Delete</a>
	</p>

<?php require_once(VIEW_PATH.'footer.inc.php'); ?>