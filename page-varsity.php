<?php
/*Template Name: Varsity Page*/
get_header( "page" ); ?>

<article style="

max-width: 1169px !important;
background-color:#fafafa;
padding:60px 30px 60px 30px;
margin:20px auto 0px auto;
  ">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <h2><img src="http://forgetoday.com/wp-content/uploads/2016/01/varsity-2016.png" alt="Varsity 2016" style="max-height:100px;"/></h2>

    <hr class="dark">

    <?php

    the_content();

  } // end while
} // end if
?>



</article>

<?php get_footer(); ?>
