<?php get_header(); ?>
<div id="result-wrap" class="row">
<div class="col-sm-8">
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>
<h2>「<?php echo $search_query; ?>」の検索結果<span>（<?php echo $total_results; ?>件）</span></h2>

<?php /*?>検索内容に該当するものがあった場合<?php */?>
<?php if( $total_results >0 ): ?>
<div id="result-list">
<?php if(have_posts()):	while(have_posts()): the_post(); ?>
  <a href="<?php echo get_permalink(); ?>">
    <?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
    <h2><?php the_title(); ?></h2>
    <p><?php
    if(mb_strlen($post->post_content,'UTF-8')>48){
    $content= str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 48,'UTF-8'));
    echo $content.'…';
  }else{
    echo str_replace('\n', '', strip_tags($post->post_content));
  } ?></p>

<?php endwhile; endif; ?>
<!-- /#result-list --></div>

<?php /*?>wp_pagenavi用の記述※不要であれば削除<?php */?>
<?php if(function_exists('wp_pagenavi')){
wp_pagenavi(array('query'=>$wp_query));
}
?>
<?php wp_reset_postdata(); ?>

<?php /*?>検索内容に該当するものがなかった場合<?php */?>
<?php else: ?>
<div id="result-list">
<p><?php echo $search_query; ?> に一致する情報は見つかりませんでした。</p>
<!-- /#result-list --></div>


</div>
<?php get_sidebar(); ?>

<?php endif; ?>
<!-- /#result-wrap --></div>
<?php get_footer(); ?>
