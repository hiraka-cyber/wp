      <div id="sidebar" class="col-sm-3">
						<strong>Mothly Archive:</strong>
						<ul class="bb">
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
						<hr>
						<strong>Categories Archive:</strong>
						<ul class="bb">
							 <?php wp_list_categories(); ?>
						</ul>
						<hr>
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
