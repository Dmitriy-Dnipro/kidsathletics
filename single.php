<?php
  $post = $wp_query->post;
 
  if (in_category('18')) {
      include(TEMPLATEPATH.'/template-parts/single-results.php');
  } else {
      include(TEMPLATEPATH.'/template-parts/single-default.php');
  }
?>