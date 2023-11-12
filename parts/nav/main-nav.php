<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 */
?>

<div class="off-canvas-content" data-off-canvas-content>
    <header class="header" role="banner">

      <div class="bg-dark">
        <div class="grid-container">
          <div class="grid-x grid-margin-x align-middle align-center align-justify color-white">
            <div class="small-7 medium-6 cell align-middle">
              <span class="top-bar-text"><a href="tel:+2348160593370" class="phone-no"><p class="p-phone margin-bottom-0"><img class="margin-right-1" width="20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/mobile-phone.svg" alt="Phone">0816 059 3370</p></a> </span>
            </div>
            <div class="small-5 medium-6 cell text-right">
              <span class="top-bar-text"><a href="mailto:info@kwbel.com" class="phone-no"><p class="phone-no margin-bottom-0"><img class="margin-right-1" width="20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/envelope-o.svg" alt="Email">info@kwbel.com</p></a> </span>
            </div>
          </div>
        </div>

      </div>

        <div class="grid-container padding-vertical-1">
            <div class="grid-x align-middle">
                <div class="large-4 medium-6 small-6 cell align-middle">
                    <a href="<?php echo home_url(); ?>" >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/kwbel-logo.svg" width="200" alt="KWBEL LOGO" />
                    </a>
                </div>
                <div class="large-8 medium-6 small-6 cell flex-container align-right align-middle">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => '',
                            'items_wrap' => '<ul class="dropdown custom-nav-menu menu show-for-large" data-dropdown-menu>%3$s</ul>',
                            'walker' => new nav_walker(),
                        )
                    )
                    ?>
                    <div class="hide-for-large">
                        <button class="hamburger hamburger--elastic" type="button" aria-label="Menu" aria-controls="navigation" data-toggle="off-canvas">
  						<span class="hamburger-box">
    					<span class="hamburger-inner"></span>
  						</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header> <!-- end .header -->

