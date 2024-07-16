<?php $featuredImage = get_the_post_thumbnail_url(); ?>

<div class="grid-container full rellax">
  <div class="grid-x">
    <div class="cell large-12 buildIn-fadeIn relative panel-image" style="background-image: url('<?php echo $featuredImage;?>'); min-height: 30vh; background-position: center; ">
      <div class="filter filter-primary-gradient"></div>
    </div>
  </div>
</div>

<div class="neat-article-container">
    <div class="row large-8 columns align-center">
        <div class="neat-article-header">
            <div class="article-header-avatar">
                <img class="header-avatar" src="https://i.imgur.com/3AeQRbR.jpg">
            </div>
            <div class="article-header-author">
                <p class="author-name">
                    Harry Manchanda
                </p>
                <p class="author-description">
                    Front End Developer crawling his way to Full Stack Development. Team Member @ZURB/Yetinauts!
                </p>
                <p class="article-date-read">27 April, 2017 - 5 min read</p>
            </div>
        </div>
        <div class="neat-article-title">
            <h3 class="article-title">
                Familiarity Bias is Holding You Back: It’s Time to Embrace Arrow Functions
            </h3>
        </div>
    </div>
    <div class="neat-article-image">
        <img class="article-image" src="https://i.imgur.com/0buQ75a.jpg" alt="Space">
    </div>
    <div class="row neat-article-content">
        <div class="small-2 large-2 columns" data-sticky-container>
            <div class="sticky article-social" data-sticky data-anchor="sticky1" data-sticky-on="small">
                <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="#"></a>
                    <a class="social-button twitter" href="#"></a>
                    <a class="social-button google-plus" href="#"></a>
                </div>
            </div>
        </div>
        <div class="small-10 large-8 columns" id="sticky1">
            <div class="article-content">

                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                  <h1><?php the_title(); ?></h1>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>

</div>
