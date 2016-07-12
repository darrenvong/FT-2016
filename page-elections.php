<?php
/*Template Name: Elections Page*/
get_header( "page" ); ?>

<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

<article class="elections">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <span class="tagline">Know your vote</span>
    <hr class="dark">

    <!-- Page grid tiles begin here -->

    <section class="grid">

      <div class="box big">
        <div class="content nopadding">
          <a href="http://195.195.131.195:1935/redirect/ForgeTV/forgecast?scheme=m3u8">
            <span id="mobileChal">

                    <i class="fa fa-play fa-5x"></i>

            </span>
          </a>

            <iframe width="100%" height="215" src="https://www.youtube.com/embed/BgznZhruZ_I" frameborder="0" allowfullscreen></iframe>

            <!-- <script type="application/javascript" src="//content.jwplatform.com/players/idJNvXsO-SliUcLGJ.js"></script> -->


            <div class="playerMeta">
                <p><?php // echo get_post_meta( get_the_ID(), 'next_live_date_time', true ); ?>Tuesday 8th at 6pm</p>
                <h4><?php // echo get_post_meta( get_the_ID(), 'next_live_title', true ); ?>Next: Results Night</h4>
                <p><?php echo get_post_meta( get_the_ID(), 'next_live_desc', true ); ?> <a href="http://sheffieldsu.com/vote">You can vote online here.</a></p>



            </div>

        </div>
      </div>

      <?php
        $electionQuery = new WP_Query( array(
          'cat' => 921,
          'posts_per_page' => 2,
          'offset' => 0
       ) );

        if( $electionQuery->have_posts()): while( $electionQuery->have_posts()): $electionQuery->the_post();
          ?>

          <a href="<?php the_permalink(); ?>" target=blank>
            <div class="box medium">

              <div class="content poppy">



                <h3><?php the_title(); ?></h3>

                <div class="imageBackground" style="background-image:url(<?php echo first_post_image(); ?>);">
                </div>

                <?php the_category(); ?>
              </div>

            </div>
          </a>

            <?php
        endwhile;
        else:

        //Fallback message
        ?><p></p><?php
        endif;
      ?>

      <div class="box wide">

        <div class="content nopadding">

          <!-- <img src="http://forgetoday.com/wp-content/themes/FT%202016/forge%20radio.svg"/> -->

            <div class="radioWidget">

              <img class="radioLogo" src="http://forgetoday.com/wp-content/themes/FT%202016/radio.svg"/>

              <div class="radioInfo">
                <h4>Forge Radio</h4>
                <p>Listen live now</p>
              </div>

              <div class="playButton">
                <a href="javascript:window.open('http://forgetoday.com/radio/player', 'popOutPlayer', 'width=470,height=410');">
                  <div class="playCircle">
                    <i class="fa fa-play fa-4x"></i>
                  </div>
                </a>
              </div>

            </div>

          </div>


        </div>


    <!-- Second row -->


      <script>
  jQuery(function() {
    jQuery( "#tabs" ).tabs();
  });
  </script>

  <!-- <div class="box full mobileHide">
    <div class="content">
      <div id="tabs">

  <ul>
    <li><a href="#tabs-1">President</a></li>
    <li><a href="#tabs-2">Welfare officer</a></li>
    <li><a href="#tabs-3">International students' officer</a></li>
    <li><a href="#tabs-4">Education officer</a></li>
    <li><a href="#tabs-5">Activities officer</a></li>
    <li><a href="#tabs-6">Development officer</a></li>
    <li><a href="#tabs-7">Womens' officer</a></li>
    <li><a href="#tabs-8">Sports officer</a></li>
  </ul>

    <div style="clear:both; margin-bottom:15px"></div>

        <div id="tabs-1">
                  <p>Candidate info here.</p>
        </div>

        <div id="tabs-2">
          <p>Candidate info here.</p>
        </div>

        <div id="tabs-3">
          <p>Candidate info here.</p>
        </div>

         <div id="tabs-4">
          <p>Candidate info here.</p>
        </div>

        <div id="tabs-5">
          <p>Candidate info here.</p>
        </div>

        <div id="tabs-6">
          <p>Candidate info here.</p>
        </div>

         <div id="tabs-7">
          <p>Candidate info here.</p>
        </div>

         <div id="tabs-8">
          <p>Candidate info here.</p>
        </div>

    </div>
      <div class="dataNotice">The candidate explorer.</div>
    </div>
  </div>








      <!-- <div class="box full mobileHide">
        <div class="content">




          <div id="tabs">

		  <ul>
		    <li><a href="#tabs-1">President</a></li>
		    <li><a href="#tabs-2">Welfare officer</a></li>
		    <li><a href="#tabs-3">International students' officer</a></li>
		    <li><a href="#tabs-4">Education officer</a></li>
		    <li><a href="#tabs-5">Activities officer</a></li>
		    <li><a href="#tabs-6">Development officer</a></li>
		    <li><a href="#tabs-7">Womens' officer</a></li>
		    <li><a href="#tabs-8">Sports officer</a></li>
		  </ul>

      	<div style="clear:both; margin-bottom:15px"></div>

      		  <div id="tabs-1">
              <iframe width="769.5" height="263.16034985422743" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/10lrebQvhpyTyhFrPqlSvfUlaFgrawBfuw0-aWOUkZHA/pubchart?oid=1735690082&amp;format=interactive"></iframe>
      		  </div>

      		  <div id="tabs-2">
      		    <p>Stats coming soon.</p>
      		  </div>

      		  <div id="tabs-3">
      		    <p>Stats coming soon.</p>
      		  </div>

      		   <div id="tabs-4">
      		    <p>Stats coming soon.</p>
      		  </div>

      		  <div id="tabs-5">
      		    <p>Stats coming soon.</p>
      		  </div>

      		  <div id="tabs-6">
      		    <p>Stats coming soon.</p>
      		  </div>

      		   <div id="tabs-7">
      		    <p>Stats coming soon.</p>
      		  </div>

      		   <div id="tabs-8">
      		    <p>Stats coming soon.</p>
      		  </div>


	      </div>




          <div class="dataNotice">Data from Forge polling. Updated daily.</div>

        </div>
      </div> -->

    <!-- Third row -->

    <?php
      $electionQuery = new WP_Query( array(
        'cat' => 921,
        'posts_per_page' => 2,
        'offset' => 2
     ) );

      if( $electionQuery->have_posts()): while( $electionQuery->have_posts()): $electionQuery->the_post();
        ?>

      <a href="<?php the_permalink(); ?>" target=blank>
  <div class="box medium">

          <div class="content poppy">



            <h3><?php the_title(); ?></h3>

            <div class="imageBackground" style="background-image:url(<?php echo first_post_image(); ?>);">
            </div>

            <?php the_category(); ?>
          </div>

        </div>
      </a>

          <?php
      endwhile;
      else:

      //Fallback message
      ?><p></p><?php
      endif;
    ?>




    <div class="box big mobileHide" style="float:right;">
      <div class="content">

        <div style="margin:20px;">

                      <span class="tweetyTitle">#ShefSUVote</span>

    <a class="twitter-timeline" data-chrome="noheader nofooter transparent" href="https://twitter.com/hashtag/shefsuvote" data-widget-id="703219851918241792">#shefsuvote Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        </div>

      </div>
    </div>




      <?php
        $electionQuery = new WP_Query( array(
          'cat' => 921,
          'posts_per_page' => 2,
          'offset' => 4
       ) );

        if( $electionQuery->have_posts()): while( $electionQuery->have_posts()): $electionQuery->the_post();
          ?>

        <a href="<?php the_permalink(); ?>" target=blank>
          <div class="box medium">

            <div class="content poppy">



              <h3><?php the_title(); ?></h3>

              <div class="imageBackground" style="background-image:url(<?php echo first_post_image(); ?>);">
              </div>

              <?php the_category(); ?>
            </div>

          </div>
        </a>

            <?php
        endwhile;
        else:

        //Fallback message
        ?><p></p><?php
        endif;
      ?>


      <div class="box big">
        <div class="content">

        	<div style="margin:20px;">

    <span class="tweetyTitle">The Elections, Explained</span>

    <div class="videoWrapper">
      <iframe width="560" height="349" src="https://www.youtube.com/embed/NmbhO2pxSN8" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="dataNotice">Who are these officers? What will they do? How do I vote? Find out in our explainer.</div>

         	</div>

        </div>
      </div>


      <?php
        $electionQuery = new WP_Query( array(
          'cat' => 921,
          'posts_per_page' => 2,
          'offset' => 6
       ) );

        if( $electionQuery->have_posts()): while( $electionQuery->have_posts()): $electionQuery->the_post();
          ?>

          <a href="<?php the_permalink(); ?>" target=blank>
            <div class="box medium">

              <div class="content poppy">



                <h3><?php the_title(); ?></h3>

                <div class="imageBackground" style="background-image:url(<?php echo first_post_image(); ?>);">
                </div>

                <?php the_category(); ?>
              </div>

            </div>
          </a>

            <?php
        endwhile;
        else:

        //Fallback message
        ?><p></p><?php
        endif;
      ?>


            <?php
              $electionQuery = new WP_Query( array(
                'cat' => 921,
                'posts_per_page' => 2,
                'offset' => 8
             ) );

              if( $electionQuery->have_posts()): while( $electionQuery->have_posts()): $electionQuery->the_post();
                ?>

                <a href="<?php the_permalink(); ?>" target=blank>
                  <div class="box medium">

                    <div class="content poppy">

                      <h3><?php the_title(); ?></h3>

                      <div class="imageBackground" style="background-image:url(<?php echo first_post_image(); ?>);">
                      </div>

                      <?php the_category(); ?>
                    </div>

                  </div>
                </a>

                  <?php
              endwhile;
              else:

              //Fallback message
              ?><p></p><?php
              endif;
            ?>




            <div class="box big"  style="float:right;">
              <div class="content">
                <div style="margin:20px; margin-top:10px;">
                <span class="tweetyTitle">Candidate Explorer</span>
                <div id="tabs">
                  <ul>
                    <li><a href="#tabs-1">President</a></li>
                    <li><a href="#tabs-2">Welfare</a></li>
                    <li><a href="#tabs-3">International students</a></li>
                    <li><a href="#tabs-4">Education</a></li>
                    <li><a href="#tabs-5">Activities</a></li>
                    <li><a href="#tabs-6">Development</a></li>
                    <li><a href="#tabs-7">Womens</a></li>
                    <li><a href="#tabs-8">Sports</a></li>
                  </ul>
                  <div style="clear:both; margin-bottom:15px"></div>

                  <div id="tabs-1">
                    <div class="fotorama" data-autoplay="true" style="margin-top:20px;" data-height="220" data-allowfullscreen="true">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/Nazma%20Begum.jpg" data-caption="Nazma Begum">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/chandler.jpg" data-caption="Oliver Chandler">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/Adam%20Hanrahan.jpg" data-caption="Adam Hanrahan">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/hall.jpg" data-caption="David Hall">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/Charles%20Philpott.jpg" data-caption="Charles Philpott">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/philpotts.jpg" data-caption="John Philpotts">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/Chris%20Saltmarsh.jpg" data-caption="Chris Saltmarsh">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/President/Dominic%20Trendall.jpg" data-caption="Dominic Trendall">
                    </div>
                  </div>

                  <div id="tabs-2">
                    <p>Candidate info coming soon.</p>
                  </div>

                  <div id="tabs-3">
                    <div class="fotorama" data-autoplay="true" style="margin-top:20px;" data-height="220" data-width="100%" data-allowfullscreen="true">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/International/nchor.jpg" data-caption="Julius Nchor"/>
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/International/Ghoona%20Niazi.jpg" data-caption="Ghoona Niazi"/>

                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/International/popa.jpg" data-caption="Ana Gabriela Popa"/>
                    </div>
                  </div>

                   <div id="tabs-4">
                    <p>Candidate info coming soon.</p>
                  </div>

                  <div id="tabs-5">
                    <p>Candidate info coming soon.</p>
                  </div>

                  <div id="tabs-6">
                    <div class="fotorama" data-autoplay="true" style="margin-top:20px;" data-height="220" data-width="100%" data-allowfullscreen="true">
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/SU%20Development/Ashwin%20Chithraveni%20Ashok.jpg" data-caption="Ashwin Chithraveni Ashok"/>
                      <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/SU%20Development/Michael%20Kind.jpg" data-caption="Michael Kind"/>
                    </div>
                  </div>

                   <div id="tabs-7">

                       <div class="fotorama" data-autoplay="true" style="margin-top:20px;" data-height="220" data-width="100%" data-allowfullscreen="true">
                         <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/Womens/Niamh%20Carton.jpg" data-caption="Niamh Carton">
                         <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/candidates/Womens/serena-headshot.JPG" data-caption="Serena Casavin">
                       </div>
                  </div>

                   <div id="tabs-8">
                    <p>Candidate info coming soon.</p>
                  </div>

                  </div>
                </div>
              </div>
            </div>






      <div class="box big">
        <div class="content">

          <div style="margin:20px;">

            <span class="tweetyTitle">Forge Tweets</span>

<a class="twitter-timeline" data-chrome="noheader nofooter transparent" href="https://twitter.com/dinosaurlord/lists/forge-outlets" data-widget-id="689189146951290881">Tweets from https://twitter.com/dinosaurlord/lists/forge-outlets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))	{js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

          </div>

        </div>
      </div>



      <div class="box big">
        <div class="content">

          <div style="margin:20px;">

          <span class="tweetyTitle">Best of Results Night 2015</span>

          <div class="fotorama" style="margin-top:20px;" data-allowfullscreen="true">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/1.jpg">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/2.jpg">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/3.jpg">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/4.jpg">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/5.jpg">
            <img src="http://forgetoday.com/wp-content/themes/FT%202016/imgs/6.jpg">
          </div>

          <div class="dataNotice"> Results Night 2016 will take place on the 10th March.</div>


          </div>

        </div>
      </div>





            <div class="box wide">

              <div class="content nopadding" style="

              display:flex;
              justify-content:center;
              align-items:center;

              ">

<a href="http://sheffieldsu.com/vote" style="

font-size:2em;
color: #3B5A86;
font-weight:700;
display

">
Click to vote now
</a>

                </div>


              </div>





   <div style="clear:both"></div>
  </section>

    <?php
  } // end while
} // end if
?>

</article>

<script>
  jQuery(document).ready(function($) {
    $('.slider').unslider({

      autoplay: true,
      arrows: false,
      delay:9000,
      pause:true



    });
  });
</script>


<?php get_footer(); ?>
