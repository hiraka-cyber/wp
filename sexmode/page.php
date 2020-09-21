<?php get_header(); ?>
<div class="container-fluid">
<div class="row">
<?php if(have_posts()):while(have_posts()): the_post(); ?>
  <div class="col-md-9">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <span><?php the_time('y-n-j'); ?></span>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
