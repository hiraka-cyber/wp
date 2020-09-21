<?php get_header(); ?>
  <div id="main" class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php
        if (have_posts()):while(have_posts()):the_post();
        the_post_thumbnail('medium',array('class' => 'img'));
        ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      <?php endwhile;endif; ?>
      </div>
      <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
