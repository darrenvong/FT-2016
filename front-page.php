<?php get_header( "front" ); ?>

      <section class="hero">
        <a href="http://forgetoday.com/varsity/">
          <img src="<?php echo get_template_directory_uri() . "/varsity_2017_cover.jpg"?>">
        </a>
      </section>

      <section class="latest" id="latest">

        <div class="posts-container">

          <h2>Latest</h2>
          <hr class="dark">

          <!-- Testing masonry -->

          <div class="grid">

            <?php get_template_part( 'content' ); ?>

          </div>

      </section>



      <section class="about" id="about">

        <div class="container">

          <h2>Branches</h2>
          <hr class="dark">

          <div class="row group">

              <div class="col span-3">
                <div class="outlet">
                  <div class="circle">
                    <i class="fa fa-3x fa-ticket"></i>
                  </div>
                  <a href="http://forgetoday.com/presents"><h3>Presents</h3></a>
                  <p>Live music and DJs in the steel city.</p>
                </div>
              </div>

              <div class="col span-3">
                <div class="outlet">
                  <div class="circle">
                    <i class="fa fa-3x fa-newspaper-o"></i>
                  </div>
                  <a href="http://forgetoday.com/press"><h3>Press</h3></a>
                  <p>News, views and reviews from our independent newspaper.</p>
                </div>
              </div>

              <div class="col span-3">
                <div class="outlet">
                  <div class="circle">
                    <i class="fa fa-3x fa-music"></i>
                  </div>
                  <a href="http://forgetoday.com/radio"><h3>Radio</h3></a>
                  <p>Broadcasting 24/7 from the Students' Union.</p>
                </div>
              </div>

              <div class="col span-3">
                <div class="outlet">
                  <div class="circle">
                    <i class="fa fa-3x fa-camera"></i>
                  </div>
                  <a href="http://forgetoday.com/tv"><h3>TV</h3></a>
                  <p>Live and recorded news, features and entertainment from our TV station.</p>
                </div>
              </div>

            </div>

          </div>
      </section>

      <section class="contact" id="contact">

        <div class="container">
          <h2>Find us</h2>
          <hr class="dark">
          <p>Come visit us at the Media Hub,<br> on level 4 of the Students' Union.</p>
        </div>

       </section>

          <script>
	         window.onload = function () {

				jQuery('.grid').masonry({
				// options
				itemSelector: '.grid-item',
				columnWidth: '.grid-sizer',
				itemSelector: '.grid-item',
				percentPosition: true
				});
		}
          </script>

                <script src="<?php echo get_stylesheet_directory_uri() . "/scroll.js"; ?>"></script>


<?php get_footer(); ?>
