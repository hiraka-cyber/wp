<?php get_header(); ?>
  <div id="main">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):while($the_query->have_posts()):$the_query->the_post();
           ?>
          <div class="col-sm-4 fadein">
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
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
        <div class="four slideContsL slideConts">
          <div class="relative">
            <div class="ab2">
              <h1>Hello World</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="four-get">
            <img src="<?php echo get_template_directory_uri(); ?>/img/globe-1637360_960_720.jpg" class="flip-horizontal"  alt="" width="100%">
          </div>
        </div>
        <div class="four slideContsR slideConts">
        <div class="relative">
          <div class="ab3">
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="four-get">
          <img src="<?php echo get_template_directory_uri(); ?>/img/globe-1637360_960_720.jpg" alt="" width="100%">
        </div>
        </div>
        <div class="four slideContsL slideConts">
        <div class="relative">
          <div class="ab2">
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="four-get">
          <img src="<?php echo get_template_directory_uri(); ?>/img/globe-1637360_960_720.jpg" class="flip-horizontal" alt="" width="100%">
        </div>
        </div>
          <div class="row one fadein">
            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'uncho',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();
             ?>
            <div class="left col-sm-4">
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
            </div>
            <div class="right col-sm-8">
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile;endif; ?>
          </div>

          <div class="row one fadein">
            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'uncho',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();
             ?>
             <div class="right col-sm-8">
               <p><?php the_content(); ?></p>
             </div>
            <div class="left col-sm-4">
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
            </div>
          <?php endwhile;endif; ?>
          </div>

          <div class="row one fadein">
            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'uncho',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();
             ?>
            <div class="left col-sm-4">
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
            </div>
            <div class="right col-sm-8">
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile;endif; ?>
          </div>
        <h1 class="text-center">News</h1>
        <div class="row">
          <?php
          $args = array(
            'post_type' => 'news',
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>
          <div class="col-sm-4 fadein">
            <?php the_post_thumbnail('medium',array('class' => 'img')); ?>
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
              } ?><a href="<?php echo get_permalink(); ?>">Read More</a></p>
            </div>
            <?php endwhile;endif; ?>
          </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
