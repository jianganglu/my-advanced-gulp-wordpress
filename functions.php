<?php

function tmpl_register_nav() {
  /**
   * 注册导航
   */
  register_nav_menus(
    array(
      'primary'   => __('主导航', 'tmpl'), // '主导航'
      'secondary' => __('副导航', 'tmpl')  // '副导航'
    )
  );
}
add_action('init', 'tmpl_register_nav');

function tmpl_setup() {
  /**
   * 特色图像
   */
  add_theme_support( 'post-thumbnails' );

  /**
   * 文章格式
   */
  add_theme_support( 'post-formats', array( 'aside', 'image', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

  /**
   * 自定义页头
   */
  add_theme_support( 'custom-header' );

  /**
   * 自定义背景
   */
  add_theme_support( 'custom-background');

  /**
   * 生成页面文档标题
   */
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tmpl_setup' );

function tmpl_register_scripts() {
  wp_register_script( 'tmpl-script', get_template_directory_uri() . '/assets/js/scripts', array( 'jquery' ) );
  wp_register_style( 'tmpl-style', get_stylesheet_uri() );
}
add_action( 'init', 'tmpl_register_scripts' );

function tmpl_enqueue_scripts() {
  wp_enqueue_script( 'tmpl-script' );
  wp_enqueue_style( 'tmpl-style' );
}
add_action( 'wp_enqueue_scripts', 'tmpl_enqueue_scripts' );

/**
 * 最好以插件形势
 */
function tmpl_create_post_type() {

  $args = array(
    'public' => true,
    'labels' => array(
      'name' => __( '课程', 'tmpl' ),
      'menu_name' => __( '课程', 'tmpl' ),
      'all_items' => __( '所有课程', 'tmpl' ),
      'add_new' => __( '添加课程', 'tmpl' ),
      'add_new_item' => __( '添加课程', 'tmpl' ),
      'edit_item' => __( '编辑课程', 'tmpl' ),
      'new_item' => __( '添加课程', 'tmpl' ),
      'view_item' => __( '查看课程', 'tmpl' ),
      'search_items' => __( '搜索课程', 'tmpl' ),
      'not_found' => __( '未找到课程', 'tmpl' ),
      'not_found_in_trash' => __( '未能在回收站中找到课程', 'tmpl' ),
    ),
    'supports' => array(
      'title',
      'editor',
      'author',
      'excerpt',
      'comments',
      current_theme_supports( 'post-thumbnails' ) ? 'thumbnail' : ''
    ),
    'menu_position' => 5,
    // 'taxonomies' => array( 'category', 'post_tag' )
  );

  register_post_type( 'tmpl_course', $args );

  // register_taxonomy_for_object_type( 'category', 'tmpl_course' );
  // register_taxonomy_for_object_type( 'post_tag', 'tmpl_course' );
  
  flush_rewrite_rules();

  $tax_args = array(
    'labels' => array(
      'name' => __( '课程分类', 'tmpl' ),
      'all_items' => __( '所有课程分类', 'tmpl' ),
      'parent_item' => __( '父分类', 'tmpl' ),
      'parent_item_colon' => __( '父分类', 'tmpl' ),
      'edit_item' => __( '编辑课程分类', 'tmpl' ),
      'update_item' => __( '更新课程分类', 'tmpl' ),
      'add_new_item' => __( '新增课程分类', 'tmpl' ),
      'new_item_name' => __( '新分类名', 'tmpl' ),
      'menu_name' => __( '课程分类', 'tmpl' ),
    ),
    'hierarchical' => true
  );

  register_taxonomy( 'tmpl_course_category', array( 'tmpl_course' ), $tax_args );
}
add_action( 'init', 'tmpl_create_post_type' );

function tmpl_course_clicked() {
  $post_id = get_the_ID();
  $count = get_post_meta( $post_id, 'tmpl_course_clicked', true);

  if( $count === '' ) {
    $count = '1';
  }else {
    $count++;
  }

  update_post_meta( $post_id, 'tmpl_course_clicked', $count );

  echo $count;
}
?>