<?php
$f_name = get_the_author_meta('first_name');
$l_name = get_the_author_meta('last_name');
?>


<?php $featuredImage = get_the_post_thumbnail_url(); ?>

<div class="grid-container">
  <div class="grid-x align-center-middle">
    <div class="small-10 large-8 cell" id="sticky1">
      <div class="article-content">

          <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <div class="blog-post padding-vertical-2">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <a href="<?php the_permalink(); ?>"><img class="thumbnail" src="<?php echo $featuredImage;?>"></a>
              <p><?php the_excerpt(); ?></p>
              <div class="callout light-grey">
                <ul class="menu simple">
                  <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/user-circle.svg" width="20" alt="Author" /></li>
                  <li><p class="margin-0"><?php echo $f_name . ' ' . $l_name; ?></p></li>
                </ul>
              </div>
              <a href="<?php the_permalink(); ?>"> Read More</a>
            </div>

          <?php endwhile; endif; ?>

      </div>
    </div>

  </div>
</div>

<div class="grid-container">
  <div class="grid-x align-center-middle padding-vertical-2">

      <?php previous_posts_link(); ?>

      <?php next_posts_link(); ?>

  </div>

</div>