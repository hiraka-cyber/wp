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
   <h1>初めまして！このサイトを見てくれてありがとうございます！</h1>
   <p>現在はバイナリーオプションで有効なロジックを知るために過去検証したり、Webライティング、動画編集などの横道な副業で稼いで生活している23歳のフリーランスです。</p>
   <p>さらに新たな挑戦としてYoutuberとして動画投稿したり、プログラミングを学んでTwitterにて成果物や有益な情報を投稿しています。</p>
   <p>今後は、Web制作やWebアプリを作成して自分のスキルを高めていきつつ同じように「スキルを高めたい！」という人に向けてさらに情報を発信していこうと思っています！</p>
   <h2>今までの実績</h2>
   <h1><strong>Webライティングで月約５万達成！</strong></h1>
   <img src="<?php echo get_template_directory_uri(); ?>/images/cca8c864bd726bbef5fda2c18cb9c463.png" alt="">
   <h1><strong>動画編集で月3万達成！</strong></h1>
   <img src="<?php echo get_template_directory_uri(); ?>/images/aa8859541de3239c2ef85ba27a6ac876.png" alt="">
   <h1><strong>メルカリ不用品転売で月収５万達成！</strong></h1>
   <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_5362.png" alt="" height="500px">
   <h1><strong>hiraka-blogでアフィリエイト収入１３０円達成！！ｗｗｗｗｗｗ</strong></h1>
   <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_5361.png" alt="" height="500px">
   </div>
 <div id="sidebar" class="col-md-3">
 <?php get_sidebar(); ?>
 </div>
 </div>
 </section>
 <?php get_footer(); ?>
