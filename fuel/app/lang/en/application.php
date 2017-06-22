<?php

return array(
	'application' => array(
        'email-addresses' => array(
            'from' => array(
                'website' => array(
                    'name' => 'RN | Wall Street Journal',
                    'email' => 'daniel.rodas1@yahoo.com',
                ),
            ),
        ),
    ),
    'page-not-found' => 'Page not found!',
	'error' => 'An error has occured',
	'category' => 'Category',
	'categories' => 'Categories',
	'commentaires' => 'Commentaires',
	'on' => 'on',
	'by' => 'by',
	'submit' => 'Submit',
	'last-posts' => 'Last posts',
	'welcome' => 'Welcome on my blog',
	'montra' => 'Dedicated to Art, Science, and Technology',


	'frontend' => array(
		'post' => array(
			'empty' => 'No post found',
			'not-found' => 'Post not found',
		),
		'comment' => array(
			'added' => 'Comment added',
		),
		'category' => array(
			'not-found' => 'Category not found',
		),
		'read-more' => 'Read more',
		'comment-this-post' => 'Comment this post',
	),

	'backend' => array(
		'post' => array(
			'manage' => 'Manage posts',
			'empty' => 'No post found',
			'add' => 'Add a new post',
			'edit' => 'Edit a post',
			'added' => 'Post created',
			'edited' => 'Post updated',
			'deleted' => 'Post deleted',
		),
		'category' => array(
			'manage' => 'Manage Categorys',
			'empty' => 'No Category found',
			'add' => 'Add a new Category',
			'parent_id' => 'Parent Category',
			'edit' => 'Edit a Category',
			'added' => 'Category created',
			'edited' => 'Category updated',
			'deleted' => 'Category deleted',
		),
		'actions' => 'Actions',
		'edit' => 'Edit',
		'add' => 'Add',
		'delete' => 'Delete',
		'are-you-sure' => 'Are you sure ?',
		'back-to-post' => 'Back to post',
		'back-to-category' => 'Back to category',
	),

	'post' => array(
		'model' => array(
			'id' => 'ID',
			'name' => 'Name',
			'category' => 'Category',
			'slug' => 'Slug',
			'content' => 'Content',
			'original_url' => 'Original URL',
			'publication-date' => 'Publication date',
			'category_id' => 'Category',
			'user_id' => 'Author',
		),
	),

	'comment' => array(
		'model' => array(
			'id' => 'ID',
			'username' => 'Username',
			'mail' => 'Mail',
			'content' => 'Content',
		),
	),

	'user' => array(
		'login' => array(
			'not-logged' => 'You need to be logged',
			'failure' => 'O oh! Please check your username and password and try again.',
			'error-missing-email' => 'Email does not exist',
			'invalid-email-address' => 'Email does not exist',
			'bad-password' => 'Sorry, you have to enter your current password first.',
			'already-logged-in' => 'Already logged in',
			'logged-out' => 'You\'re now logged out',
			'sign-in' => 'Sign in',
			'recovery-email-send' => 'Please check your email for further instructions',
			'reset' => 'Reset Password',
			'recover' => 'Recover Password',
			'mismatch-password' => 'Passwords do not match',
			'changed' => 'Your password was changed',
			'confirm_password' => 'Confirm Password',
			'new_password' => 'New Password',
			'permission-denied' => 'Permissions Denied',
            'password-recovery' => ' RN | WJS Password Recovery',
            'provider-linked' => 'Thank you for connecting with social media',
            'logged_in_using_provider' => 'Thank you for connecting with social media',
            'register-first' => 'Thank you for connecting with social media',
            'auto-registered' => 'Thank you for connecting with social media',
		),
		'model' => array(
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
		),
	),

);