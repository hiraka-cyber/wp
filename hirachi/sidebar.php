<h1 class="text-center">SNS</h1>
<section id="wordpress-seminar">
<h2><strong>Categories</strong></h2>
<ul class="list-group mb-3">
  <?php
  $args = array('title_li' => '',);
  wp_list_categories($args);
  ?>
</ul></section>
<section id="seo-seminar">
<h2><strong>MonthArchive</strong></h2>
<ul class="list-group mb-3">
  <?php
  $args = array('type' => 'monthly',);
  wp_get_archives($args);
  ?>
</ul>
<a class="twitter-timeline" data-width="300" data-height="500" href="https://twitter.com/tk_takeru_?ref_src=twsrc%5Etfw">Tweets by tk_takeru_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</section>
