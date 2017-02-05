<?php get_header( "front" ); ?>

      <section class="hero">

          <video class="background" poster="<?php echo get_stylesheet_directory_uri(); ?>/poster.jpg" autoplay loop>
              <source src="<?php echo get_stylesheet_directory_uri() . "/video.webm"; ?>" type="video/webm">
          </video>

          <div class="cover">
              <div class="siteInfo">

                  <img src="<?php echo get_stylesheet_directory_uri() . "/logo.svg"; ?>" alt="Forge"/>
                  <hr class="light">
                  <h4>Award-winning student media from<br>
                    the University of Sheffield.</h4>

                    <a href="#latest">
                      <div class="buttonTransparent" > <i class="fa fa-angle-down"></i>  Latest</div>
                    </a>

                    <!-- <a href="/tramlines" class="mobileHide">
                      <div class="buttonDark">Tramlines</div>
                    </a> -->

              </div>
          </div>

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
