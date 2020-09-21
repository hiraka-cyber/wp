<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if(have_posts()):while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <span><?php the_time('y-n-j'); ?></span>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
