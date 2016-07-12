      <footer>

        <nav class="bottom">
          <?php
          $args = array(
          'theme_location' => 'left',
          );
          wp_nav_menu( $args);
          ?> | <?php
          $args = array(
          'theme_location' => 'right',
          );
          wp_nav_menu( $args);
          ?>
        </nav>

        <span>&copy; Forge Media <?php echo date('Y'); ?>. Site by <a href="http://joshuahackett.com/">Joshua Hackett</a>.</span>

      </footer>


      <?php wp_footer(); ?>
    </body>
</html>