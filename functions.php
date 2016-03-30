<?php

// Theme-specific files
if( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(array(
    'primary' => __('主导航', 'templ')
  ));
}
/* WordPress后台禁用Google Open Sans字体，加速网站
--------------------------------------------------- */
function remove_open_sans() {
  wp_deregister_style( 'open-sans' );
  wp_register_style( 'open-sans', false );
  wp_enqueue_style( 'open-sans', '' );
}

// 添加特色缩略图支持
if( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );

// 输出缩略图地址From wpdaxue.com
function post_thumbnail_src() {
  global $post;
  if( $value = get_post_custom_value( 'thumb' ) ) {
    $value = get_post_custom_value( 'thumb' );
    $post_thumbnail_src = $value[0];
  }elseif( has_post_thumbnail() ) {
    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    $post_thumbnail_src = $thumbnail_src[0];
  }else {
    $post_thumbnail_src = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].">/i', $post->post_content, $matches );
    $post_thumbnail_src = $matches[1][0]; // 获取该图片src
    if( empty( $post_thumbnail_src ) ) {
      $random = mt_rand(1, 10);
      echo get_bloginfo( 'template_url' );
      echo '/images/pic/'.$random.'.jpg';
      // 如果日志中没有图片，则显示默认图片
      // echo '/images/default_thumb.jpg'
    }
  };
  echo $post_thumbnail_src;
}

// 翻页
function par_pagenavi( $range = 9 ) {
  global $paged, $wp_query;
  if( !$max_page ) {$max_page = $wp_query->max_num_page;}
  if( $max_page > 1 ) {if( $paged ) {$paged = 1;}}
  if($paged != 1) {echo "<a class="extend" title='跳转到首页' href='".get_pagenum_link(1)."'>返回首页</a>";}
  previous_posts_link( '上一页' );
  if( $max_page > $range ) {
    if( $paged < $range ) {
      for($i = 1; $i <= ($range + 1); $i++) {
        echo "<a href='".get_pagenum_link($i)."'";
        if($i == $paged) echo " class='current'";echo ">$i</a>";
      }
    }
  }elseif($paged >= ($max_page - ceil(($range/2)))) {
    for($i = $max_page - $range; $i <= $max_page; $i++) {
      echo "<a href='".get_pagenum_link($i)."'";
      if($i==$paged)echo " class='current'";echo ">$i</a>";
    }
  }elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))) {
    for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil($range/2)); $i++) {
      echo "<a href='".get_pagenum_link($i)."'";
      if($i==$paged) echo " class='current'";echo ">$i</a>";
    }
  }else {
    for($i = 1; $i <= $max_page; $i++) {
      echo "<a href='".get_pagenum_link($i)."'";
      if($i == $paged) echo " class='current'"; echo ">$i</a>"
    }
  }
  next_posts_link( '下一页' );
  if($paged != $max_page){
    echo "<a href='".get_pagenum_link($max_page)."' class='extend' title='跳转到最后一页'>最后一页</a>"
  }
}

if(function_exists('register_sidebar')) {
  register_sidebar(array(
    'before_widget' => '<div class="sw-menu">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

// 开启友情链接
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// 登录用户浏览站点时不显示工具栏
add_filter( 'show_admin_bar', '__return_false' );

// 移除自动保存
function tin_disable_autosave() {
  wp_deregister_script( 'autosave' );
}

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