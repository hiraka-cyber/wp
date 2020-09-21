      <div id="sidebar" class="col-sm-3">
        <div class="text-center">
        <strong>Profile</strong><br>
        <img class="four-get" src="<?php echo get_template_directory_uri(); ?>/img/rottan.png" alt="" width="50%" style="border-radius:50%">
        </div>
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <ul class="bb text-right">
          <li><a href="#">> click me</a></li>
          <li><a href="#">> click me</a></li>
          <li><a href="#">> click me</a></li>
          <li><a href="#">> click me</a></li>
        </ul>
        <div class="text-center">
						<strong>New Archive</strong>
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()): while($the_query->have_posts()):$the_query->the_post();
            ?>
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium',array('class' => 'img')); ?></a>
            <div class="three-get">
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
						<h1 class="text-center">Contact</h1>
						<form action="/wordpress/index/" method="post">
							<div>
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" value="" placeholder="please name...">
							</div>
							<div>
								<label for="email">email</label>
								<input class="form-control" type="text" name="email" value="" placeholder="please email...">
							</div>
							<div>
								<label for="name">content</label>
								<textarea class="form-control" name="content" rows="8" cols="80" placeholder="please question..."></textarea>
							</div>
							<br>
							<div class="text-center">
								<button class="btn btn-primary" type="submit" name="button">Send</button>
							</div>
						</form>
		 </div><!-- #content -->
