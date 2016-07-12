<!-- .grid-sizer empty element, only used for element sizing -->
<div class="grid-sizer"></div>

<?php

  //Instantiates a counter variable for proper grid display
  $count=0;

  //The loop
  if( have_posts()) :
  while(have_posts()): the_post();

  //Display first post differently
  if($count===0){

?>

<!-- Post markup here -->

  <div class="grid-item grid-item-double">
    <div class="tile">

        <a href="<?php the_permalink(); ?>"><img src="<?php echo first_post_image(); ?>" /></a>

        <div class="buffer">
          <h4><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p><?php the_excerpt(); ?></p>
        </div>

    </div>
  </div>

<!-- Post markup ends -->

<?php
}else{ 
?>

<!-- Post markup here -->

  <div class="grid-item">
    <div class="tile">

        <a href="<?php the_permalink(); ?>"><img src="<?php echo first_post_image(); ?>" /></a>

        <div class="buffer">
          <h4><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p><?php the_excerpt(); ?></p>
        </div>

    </div>
  </div>

<!-- Post markup ends -->

<?php

};

  //Iterates the counter
  $count++;

  //End of the loop
  endwhile;
  else:

  //Fallback message
  ?><p>No content to show.</p><?php
  endif;
?>
