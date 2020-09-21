<?php
//thumbnail,menus
function sexmode_setup() {
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'menus');
}
add_action( 'after_setup_theme', 'sexmode_setup' );
//jquery
function load_cdn() {
    if (!is_admin() ) {
        wp_enqueue_script( 'jquery'); //deregister
        wp_enqueue_script('index',get_template_directory_uri() . '/js/index.js',array('jquery'),'',true);
        }
    }
add_action( 'init', 'load_cdn');

// タグアーカイブに固定ページを含める
function add_page_to_tag_archive( $obj ) {
 if ( is_tag() ) {
 $obj->query_vars['post_type'] = array( 'post', 'page' );
 }
}
add_action( 'pre_get_posts', 'add_page_to_tag_archive' );
//custom post
function create_post_type() {
  register_post_type( 'news', // 投稿タイプ名の定義
  array(
    'supports' => array('title','editor','thumbnail'),
    'labels' => array(
      'name' => __( 'News' ), // 表示する投稿タイプ名
      'singular_name' => __( 'News' )
    ),
    'public' => true,
    'menu_position' =>5,
  )
);
register_taxonomy(
        'newscat', //カテゴリー名（任意）
        'news', //カスタム投稿名
        array(
          'hierarchical' => true, //カテゴリータイプの指定
          'update_count_callback' => '_update_post_term_count',
          //ダッシュボードに表示させる名前
          'label' => 'category',
          'public' => true,
          'show_ui' => true
        )
      );
    //タグタイプの設定（カスタムタクソノミーの設定）
      register_taxonomy(
        'newstag', //タグ名（任意）
        'news', //カスタム投稿名
        array(
          'hierarchical' => false, //タグタイプの指定（階層をもたない）
          'update_count_callback' => '_update_post_term_count',
          //ダッシュボードに表示させる名前
          'label' => 'tag',
          'public' => true,
          'show_ui' => true
        )
      );
}
add_action( 'init', 'create_post_type' );

//mainquery custom
add_action( 'pre_get_posts', 'foo_modify_main_queries' );
function foo_modify_main_queries ( $query ) {
  if ( ! is_admin() && $query->is_main_query() ) { // 管理画面以外かつメインクエリーを対象とする
    if ( $query->is_home() ) {
      $query->set( 'post_type', array('post','blog','news','product')); // 投稿とカスタム投稿（blog）を含める
    }
  }
}
