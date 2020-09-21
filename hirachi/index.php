<?php get_header(); ?>

 <section id="content">
 <div id="content-wrap" class="container">
 <div id="main" class="col-md-9">
 <h1 class="text-center">HIRAKA-BLOG</h1>
 <p>
 BainaryOptions Backtestサイトは自分でバイナリーオプションのバックテストを自分で取得できないという方向けに
 当ブログの運営者が実際に検証していこうというサイトです。
 <br><br>
 検証のメインではMT4に手記搭載されているインジケーターからカスタムインジケーター（自作のインジケーター）を検証しています。
 </p>
 <p>
 プログラミング学習についても当ブログから発信しています。プログラミングの具体的な学習についての内容や、自分が学習していく際に
 躓いたポイントや作成したものについても発信していきます！
 <br><br>
 プログラミングに興味があるけど、なかなか実態がよくわからない！初心者には難しそう！といった方々に向けて発信していこうと思います。
</p>
 <div class="row">
 <div class="col-md-6">
 <p><img src="<?php echo get_template_directory_uri(); ?>/images/20191027144015.png" alt="mql4画像"></p>
 <h2 class="text-center">mql4でのバックテスト検証</h2>
 <p>ロジックが決まっていなくて初期搭載のインジケーターを軸にトレードしている方は要必見です。
 <br><br>
 初期搭載されていない自作のインジケーターでの検証も行っています。
 </p>

 </div>
 <div class="col-md-6">
 <p><img src="<?php echo get_template_directory_uri(); ?>/images/sample_5.jfif" alt="programming画像"></p>
 <h2 class="text-center">プログラミングでの制作物</h2>
 <p>プログラミングを学習していきつつ、作成したものをアップロードしていきます。</p>
 <br><br>
 主要な言語:HTML,CSS,Jquery,Python,PHP,Ruby
 </div>
 </div>
 <p class="text-center">
 <br>
 検証結果は<a href="https://hiraka-blog.hatenablog.com/?_ga=2.224254747.1214285173.1568416858-1285615804.1561784540">こちらから</a>
 <br><br>
 </p>
 <div id="posts">
 <h1>記事一覧</h1>
 <hr>
       <?php
       if ( have_posts() ) :
           while ( have_posts() ) : the_post();
       ?>
           <h2>
 <?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;
             <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
           </h2>
           <hr>
       <?php
           endwhile;
       endif;
       ?>
 </div>
 </div>
 <div id="sidebar" class="col-md-3">
 <?php get_sidebar(); ?>
 </div>
 </div>
 </section>
 <?php get_footer(); ?>
