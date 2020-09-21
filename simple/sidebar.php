      <div id="sidebar" class="col-sm-4">
        <div class="text-center">
          <h2>Archive</h2>
          <?php $args = array('type' => 'monthly',);wp_get_archives($args); ?>
          <?php get_search_form(); ?>
          <h2>New Post</h2>
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):while($the_query->have_posts()):$the_query->the_post();
          ?>
          <div class="text-center">
          <a href="<?php get_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          <strong><?php if(mb_strlen($post->post_title, 'UTF-8')>20){
                $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
                echo $title.'…';
              }else{
                echo $post->post_title;
              }?></strong>
              <p><?php
              if(mb_strlen($post->post_content,'UTF-8')>48){
              $content= str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 48,'UTF-8'));
              echo $content.'…';
            }else{
              echo str_replace('\n', '', strip_tags($post->post_content));
            } ?></p>
            </div>
          <?php endwhile;endif; ?>
        </div>
		 </div><!-- #content -->
