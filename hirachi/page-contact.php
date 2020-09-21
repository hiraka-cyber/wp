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
   <br><br>
   <p>バイナリーオプションでトレードしている方で、自分の手法を検証してほしい！
     <br><br>
     Webページを作りたいけど、作り方がわからない！
     <br><br>
     といった方々に向けて有益な情報を発信しています。
     <br><br>
     何か質問やご要望がありましたら、以下よりお問い合わせください！
   </p>
   <br>
   <div style="">
     <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_icon-icons.com_62765.png" alt="" width="70px" height="70px">
     <a href="https://twitter.com/tk_takeru_">Twitter</a>
   </div>
   <br>
   <div class="" style="">
     <img src="<?php echo get_template_directory_uri(); ?>/images/md_5a9797d18f418.jpg" alt="" width="70px" height="70px" style="border-radius: 50%;">
     <a href="https://www.instagram.com/tk_takeru_/">Instagram</a>
   </div>
   <br>
   <div class=""style="">
     <img src="<?php echo get_template_directory_uri(); ?>/images/f_logo_RGB-Hex-Blue_512.png" alt="" width="70px" height="70px">
     <a href="https://www.facebook.com/profile.php?id=100019542188800">FaceBook</a>
   </div>
   <br>
   <div class="" style="">
     <img src="<?php echo get_template_directory_uri(); ?>/images/app-icon-logo-icon-media-icon-popular-icon-social-icon-youtube-icon-red-line-sign-circle-png-clip-art.png" alt="" width="70px" height="70px" style="border-radius: 50%;">
     <a href="https://www.youtube.com/channel/UC3L7-IgytHaRqZJiO1j1jQQ">Youtube</a>
   </div>
   </div>
 <div id="sidebar" class="col-md-3">
 <?php get_sidebar(); ?>
 </div>
 </div>
 </section>
 <?php get_footer(); ?>
