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

        <span>&copy; Forge Media <?php echo date('Y'); ?>. Site by Joshua Hackett.</span>

      </footer>


      <?php wp_footer(); ?>
    </body>
</html>
