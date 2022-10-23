<?php

function news_post_type() {
	register_post_type ('news', array(
		'public' => true,
		'labels' => array (
			'name' => 'News' ,
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'all_items' => 'All News',
		)
	));
}
add_action( 'init', 'news_post_type' );