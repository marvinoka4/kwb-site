<?php

// Template Name: Contact Us

get_header(); ?>


<?php get_template_part('parts/header/page-header');?>


<div class="grid-container">
    <div class="grid-x grid-padding-x align-middle padding-vertical-4">
        <div class="large-6 medium-6 cell">
            <div class="large-12 cell section-title">
              <h3>Get in Touch</h3>
            </div>
            <p>KWBEL is the coming together of experts from different business field, with high business orientation and experience, coming together to form a unique business platform aimed at providing services and solution to different businesses with one unique formula.</p>
        </div>

        <div class="large-6 medium-6 cell">
            <div class="grid-x grid-padding-x">
                <div class="large-6 medium-12 cell align-middle">
                    <div class="primary callout color-white no-link-style">
                        <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/mobile-phone.svg" alt="Phone">Phone</h4>
                      <a href="tel:+2348160593370" class="phone-no"><p class="p-phone">0816 059 3370</p></a>
                    </div>
                </div>
                <div class="large-6 medium-12 cell">
                  <div class="primary callout  color-white no-link-style">
                    <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/envelope-o.svg" alt="Email"> Email</h4>
                    <a href="mailto:info@kwbel.com"><p>info@kwbel.com</p></a>
                  </div>
                </div>
                <div class="large-12 medium-12 cell">
                    <div class="primary callout color-white no-link-style">
                        <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/building-o.svg" alt="Structured Growth"> Office</h4>
                        <p>Nigeria : B4, Real Tower Plaza, Utako, Abuja</p>
                        <p>Nigeria : 136 hospital road Aba. First floor front, Abia</p>
                        <p>Ghana : 21 gatin street ,Daman Plaza, Tesano, Accra</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />

</div>


<div class="grid-container">
    <div class="grid-x grid-padding-x padding-vertical-4 align-middle">
        <div class="large-6 medium-6 cell">
            <div class="large-12 cell section-title">
              <h3>Reach Us</h3>
            </div>


            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">

                    <?php get_template_part('parts/content/contact-form');?>

                </div>
            </div>


        </div>

        <div class="small-12 large-6 medium-6 cell align-center-middle align-center" style="overflow: hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.964708214!2d7.372104677111298!3d5.1093904948676485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10429937b8133461%3A0x702a2bdf41e7ff4c!2s136%20Hospital%20Rd%2C%20Aba%20450101%2C%20Aba%2C%20Abia%2C%20Nigeria!5e0!3m2!1sen!2suk!4v1698001135946!5m2!1sen!2suk" width="100%" height="450" style="border:0; border-radius: 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>


<?php get_footer(); ?>
