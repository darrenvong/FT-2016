<?php
/*Template Name: Full Width Page*/
get_header( "page" ); ?>

<article class="fullwidth">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <hr class="dark">

    <?php

    the_content();

  } // end while
} // end if
?>



</article>

<?php get_footer(); ?>
