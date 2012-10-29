<?php 
/*
Plugin Name: Post Type
Plugin URI: 
Description:
Author: Mahla Delpak
Version: 1.0
Author URI: https://github.com/mahlad
*/

include 'meta-box.php';
add_action('init','create_product_type');
function create_product_type(){
	$labels_pt=array(
		'name' => 'محصولات',
		'singular_name' => 'محصولات',
		'add_new' => 'افزودن محصول',
		'add_new_item' => 'افزودن محصول جدید',
		'edit_item' => 'ویرایش محصول',
		'new_item' => 'محصول جدید',
		'view_item' => 'نمایش محصول',
		'search_items' => 'جستجوی محصول',
		'not_found' => 'محصول مورد نظر یافت نشد',
		'not_found_in_trash' => 'محصول مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'محصول',
		'menu_name' => 'محصولات'

		);
	$args_pt=array(
		'label' => 'محصولات',
		'labels' => $labels_pt,
		'description' =>'این پلاگین در حالت آزمایشی قرار دارد.',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array('title','editor','author', 'page-attributes'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'products'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('products', $args_pt);
	
 ?>