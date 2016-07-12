<?php
 get_header( "page" ); ?>

<article class="standard">

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
