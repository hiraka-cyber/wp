<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()): the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
  <span><?php the_time('y-n-j'); ?></span>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
