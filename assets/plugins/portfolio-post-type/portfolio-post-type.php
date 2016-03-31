<?php
/*
Plugin Name: Portfolio Post Type
Plugin URI: 插件的介绍或更新地址
Description: Portfolio Post Type
Version: 1.0.0
Author: HengTian UED
Author URI: http://ued.hengtiansoft.com/
License: GPL2
*/

function create_portfolio_post_type() {
  $args = array(
    'public' => true,
    'labels' => array(
      'name' => __( 'Portfolios', 'tmpl' ),
      'menu_name' => __( 'Portfolios', 'tmpl' ),
      'all_items' => __( 'All Portfolios', 'tmpl' ),
      'add_new' => __( 'Add New', 'tmpl' ),
      'add_new_item' => __( 'Add Portfolio', 'tmpl' ),
      'edit_item' => __( 'Edit Portfolio', 'tmpl' ),
      'new_item' => __( 'New Portfolio', 'tmpl' ),
      'view_item' => __( 'View Portfolio', 'tmpl' ),
      'search_items' => __( 'Search Portfolios', 'tmpl' ),
      'not_found' => __( 'No Portfolios found', 'tmpl' ),
      'not_found_in_trash' => __( 'No Portfolios found in Trash', 'tmpl' ),
    ),
    'supports' => array(
      'title',
      'editor',
      'author',
      'excerpt',
      'comments',
      current_theme_supports( 'post-thumbnails' ) ? 'thumbnail' : ''
    ),
    'menu_position' => 5
  );

  register_post_type( 'portfolio', $args );

  flush_rewrite_rules();

  $tax_args = array(
    'labels' => array(
      'name' => __( 'Portfolio Genre', 'tmpl' ),
      'all_items' => __( 'All Portfolio Genres', 'tmpl' ),
      'parent_item' => __( 'Parent Genre', 'tmpl' ),
      'parent_item_colon' => __( 'Parent Genre', 'tmpl' ),
      'edit_item' => __( 'Edit Portfolio Genre', 'tmpl' ),
      'update_item' => __( 'Update Portfolio Genre', 'tmpl' ),
      'add_new_item' => __( 'Add New Portfolio Genre', 'tmpl' ),
      'new_item_name' => __( 'New Portfolio Type Genre', 'tmpl' ),
      'menu_name' => __( 'Portfolio Genre', 'tmpl' ),
    ),
    'hierarchical' => true
  );

  register_taxonomy( 'portfolio_course_category', array( 'portfolio' ), $tax_args );
}
add_action( 'init', 'create_portfolio_post_type' );
?>