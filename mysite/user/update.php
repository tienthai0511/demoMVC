<?php

// Initialize site configuration
require_once('includes/config.inc.php');

// Check the querystring for a numeric id
if (isset($_GET['id']) && intval($_GET['id']) > 0) {

	// Initialize form values
	$title = NULL;
	$content = NULL;

	// Get id from querystring
	$id = $_GET['id'];
		
	// Check for inital page request
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {

		// Execute database query
		$post = Post::getById($id);
							
		// Set form values
		$title = $post->title;
		$content = $post->content;
	} 
	
	// Check for page postback
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
		// Get user input from form
		$title = $_POST['title'];
		$content = $_POST['content'];

		// Execute database query
		$post = new Post();
		$post->id = $id;
		$post->title = $title;
		$post->content = $content;
		$post->save();
					
		// Redirect to site root
		redirect_to('.');	
	} 

} else {

	// Redirect to site root
	redirect_to('.');	
}

// Include page view
require_once(VIEW_PATH.'upsert.view.php');