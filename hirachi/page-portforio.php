<?php get_header(); ?>

 <section id="content">
 <div id="content-wrap" class="container">
   <div id="main" class="col-md-9">
     <?php
   if ( have_posts() ) :
       while ( have_posts() ) : the_post();
   ?>
       <h1><?php the_title(); ?></h1>
       <section>
         <?php the_content(); ?>
       </section>
   <?php
       endwhile;
   endif;
   ?>

     <a href="http://tkchannel.html.xdomain.jp/demosite/demo0.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo1.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/demo1.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo2.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/demo2.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo3.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/demo3.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo4.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/dex.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo5.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/hello.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo6.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/hey.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo7.png" alt="" style="float:left;padding:1%;"></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/in.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo8.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo9.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/jyokyu.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo10.png" alt="" style="float:left;padding:1%;"/></a>

     <a href="http://tkchannel.html.xdomain.jp/demosite/sample_1.html"><img src="<?php echo get_template_directory_uri(); ?>/images/demo11.png" alt="" style="float:left;padding:1%;"/></a>

   <p style="clear:both;"></p>
   </div>
 <div id="sidebar" class="col-md-3">
 <?php get_sidebar(); ?>
 </div>
 </div>
 </section>
 <?php get_footer(); ?>
