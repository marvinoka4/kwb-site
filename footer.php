<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">
  <div class="grid-container full">
    <div class="grid-x grid-margin-x grid-margin-y text-center">
      <div class="small-12 medium-4 large-4 cell text-center text-small ">
        <ul class="menu vertical medium-horizontal align-middle align-left" >
          <li class="footer-item"><p class="footer-text"><a class="footer-link" href="#" title="Copyright KWBEL">© 2023. KWBEL</a></p></li>
        </ul>
      </div>

      <div class="small-12 medium-8 large-8 cell text-center text-small ">
          <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'footer-menu',
                  'container' => '',
                  'items_wrap' => '<ul class="menu vertical medium-horizontal align-middle align-right" >%3$s</ul>',
                  'walker' => new nav_walker(),
              )
          )
          ?>
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