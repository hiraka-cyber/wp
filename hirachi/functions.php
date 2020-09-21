<?php
function hiraka_demo_setup(){
  //関数の中身を記述する
  add_theme_support('post-thumbnails');//アイキャッチ画像ON
  add_theme_support('menus');//メニューON
}
add_action('after_setup_theme','hiraka_demo_setup');
