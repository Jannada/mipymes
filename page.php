<?php get_header(); ?>
  <?php
  $url_actual = home_url( add_query_arg( array(), $wp->request ) );

  if($url_actual == 'http://localhost/proyecto-mypimes/nosotros'){
    include "nosotros.php";
  }else if($url_actual == 'http://localhost/proyecto-mypimes/productos'){
    include "productos.php";
  }else if($url_actual == 'http://localhost/proyecto-mypimes/cart'){
  include "cart.php";
}

  ?>
  <?php get_footer(); ?>