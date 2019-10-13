<?php

		//calling stylesheet
	function calling_resources(){
		
		
			wp_enqueue_style('style', get_stylesheet_uri() );
		
	}
	add_action('wp_enqueue_scripts' , 'calling_resources');

		
		
		
		// register menu
	function my_theme(){
		
		register_nav_menus(array(
			'primary' => __('Top Menu'),
			'footer' => __('Footer Menu')
		));


		
		//register featured image 
		add_theme_support('post-thumbnails');

	}

	add_action('after_setup_theme' , 'my_theme');

	
	
	// widget/sidebar register
	function ourWidget(){
		
		register_sidebar(array(
		
		'name'=> 'Top Sidebar',
		'id'=> 'sidebar1',
		'before_widget'=> '<div class="sidebar">',
		'after_widget'=> '</div>',
		'before_title'=> '<h2 class="side_h2">',
		'after_title'=> '</h2>'
		
		));
		
		register_sidebar(array(
		'name' => 'Footer Top Left',
		'id' => 'sidebar2',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="red">',
		'after_title' => '</h2>',
	));	
		register_sidebar(array(
		'name' => 'Footer Top Middle',
		'id' => 'sidebar3',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="green">',
		'after_title' => '</h2>',
	));	
		register_sidebar(array(
		'name' => 'Footer Top Right',
		'id' => 'sidebar4',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="orange">',
		'after_title' => '</h2>',
	));		
		
	}

	add_action('widgets_init' , 'ourWidget');
	
	
// Excerpt Function
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='readmore'>Continue Reading &raquo;</a>";
	echo $excerpt;
}
	
	