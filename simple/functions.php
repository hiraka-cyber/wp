<?php
//thumbnail,menus
function sexmode_setup() {
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'menus');
}
add_action( 'after_setup_theme', 'sexmode_setup' );

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
      $query->set( 'post_type', array('post','blog','news')); // 投稿とカスタム投稿（blog）を含める
    }
  }
}

//-----------------------------------------
// 投稿・固定ページ カスタムフィールド追加
//-----------------------------------------
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'news');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
}

//-----------------------------------------
// カスタムフィールド表示
//-----------------------------------------
function my_custom_fields() {
  global $post;
  $robots = get_post_meta($post->ID,'robots',true);
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);

  echo '<p>検索ロボット（カンマ区切り）<br />';
  echo '<input type="text" name="robots" value="'.esc_html($robots).'" size="50" /></p>';

  echo '<p>キーワード（カンマ区切り）<br />';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="50" /></p>';

  echo '<p>ページの説明<br />';
  echo '<input type="text" name="description" value="'.esc_html($description).'" size="50" /></p>';
}

//-----------------------------------------
// カスタムフィールドの値を保存
//-----------------------------------------
function save_custom_fields( $post_id ) {
  if(!empty($_POST['robots']))
    update_post_meta($post_id, 'robots', $_POST['robots'] );
  else delete_post_meta($post_id, 'robots');

  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');

  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}

//-----------------------------------------
// ページ毎のmata要素とtitleの設定
//-----------------------------------------
function MataTitle() {

// カスタムフィールドの値を読み込む
$custom = get_post_custom();
if(!empty( $custom['robots'][0])) {
  $robots = $custom['robots'][0];
}
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
<?php if(is_home()): // トップページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="キーワード1, キーワード2, キーワード3">
<meta name="description" content="サイトの説明文を入れて下さい。" />
<title><?php bloginfo('name'); ?></title>
<?php elseif(is_single()): // シングルページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<title><?php wp_title('｜',true,'right'); bloginfo('name'); ?></title>
<?php elseif(is_page()): // 固定ページ ?>
<meta name="robots" content="<?php echo $robots ?>" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<title><?php wp_title('｜',true,'right'); bloginfo('name'); ?></title>
<?php elseif (is_category()): // カテゴリーページ ?>
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php single_cat_title(); ?>の記事一覧" />
<title><?php single_cat_title(); ?>の記事一覧 | <?php bloginfo('name'); ?></title>
<?php elseif (is_tag()): // タグページ ?>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧" />
<title><?php single_tag_title(); ?>の記事一覧 | <?php bloginfo('name'); ?></title>
<?php elseif(is_404()): // 404ページ ?>
<meta name="robots" content="noindex, follow" />
<title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
<?php else: // その他ページ ?>
<meta name="robots" content="noindex, follow" />
<title><?php wp_title('｜',true,'right'); bloginfo('name'); ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<?php
}

//カスタム投稿用post_typeセット
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "{$post_type}-search.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}
?>
