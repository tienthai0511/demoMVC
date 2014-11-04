<?php require_once(VIEW_ADMIN.'header.inc.php'); ?>

	<?php foreach($posts as $post): ?>

		<h4>
			<a href="read.php?id=<?php 
				echo $post->id;?>"><?php 
				echo $post->title;?>
			</a>
		</h4>

		<p>
			<?php echo $post->content;?>
			<?php echo $post->created;?>
		</p>

	<?php endforeach; ?>

