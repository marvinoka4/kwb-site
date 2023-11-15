<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer text-white" role="contentinfo">
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y text-center large-text-left">
      <div class="small-12 medium-12 large-4 cell margin-bottom-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/kwbel-logo-footer.svg" width="250" height="61" alt="KWBEL" />

          <?php get_template_part('parts/content/social-stack'); ?>
      </div>

      <div class="small-12 medium-6 large-4 cell">
        <h4 class="color-white">Links</h4>
        <ul class="menu vertical color-white">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container' => '',
                    'items_wrap' => '<ul class="menu footer-menu-link vertical" >%3$s</ul>',
                    'walker' => new nav_walker(),
                )
            )
            ?>
        </ul>
      </div>

      <div class="small-12 medium-6 large-4 cell">
          <?php get_template_part('parts/content/contact-stack'); ?>
      </div>


      <div class="small-12 medium-12 large-12 cell text-center text-small margin-top-4">

        <li class="footer-item"><p class="footer-text source-org"><a class="footer-link copyright" title="Copyright KWBEL">Copyright © <?php echo date('Y'); ?> KWBEL. All Rights Reserved.</a></p></li>
        <br>
        <p class="color-white"><a href="#">Privacy Policy</a>

      </div>
    </div>
  </div>
</footer> <!-- end .footer -->



<div class="progress-wrap margin-bottom-2">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>  <!-- end page -->