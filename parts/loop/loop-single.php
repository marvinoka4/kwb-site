<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

  <header class="article-header">

    <div class="grid-container">
      <div class="grid-x align-center-middle padding-vertical-2">
        <div class="small-12 medium-12 large-12 cell text-center">
<!--          <a class="category-text" rel="category">--><?php //foreach((get_the_category()) as $category) { echo $category->cat_name; } ?><!--</a>-->
          <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
            <?php get_template_part( 'parts/content', 'byline' ); ?>
        </div>
        <div class="small-4 medium-4 large-4 cell">
          <div class="grid-x align-center-middle">
            <div class="cell small-1 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/user-circle.svg" width="40" alt="Author" />
            </div>
            <div class="cell small-4 text-center">
                <?php
                $f_name = get_the_author_meta('first_name');
                $l_name = get_the_author_meta('last_name');
                ?>
              <p class="margin-0"><?php echo $f_name . ' ' . $l_name; ?></p>
            </div>
          </div>
        </div>
        <div class="small-12 medium-12 large-12 cell text-center">
          <p class="margin-0"><?php echo get_the_date('d/m/Y'); ?></p>
        </div>
      </div>
    </div>

    <?php $featuredImage = get_the_post_thumbnail_url(); ?>

    <div class="grid-container full rellax padding-vertical-2">
      <div class="grid-x">
        <div class="cell large-12 buildIn-fadeIn relative panel-image" style="background-image: url('<?php echo $featuredImage;?>'); min-height: 40vh; background-position: center; ">
          <div class="filter filter-primary-gradient"></div>
        </div>
      </div>
    </div>

  </header> <!-- end article header -->

  <section class="entry-content" itemprop="articleBody">
      <div class="grid-container">
          <div class="grid-x align-center-middle padding-vertical-2">
              <div class="small-10 medium-10 large-10 cell">
                  <?php the_content(); ?>
              </div>
          </div>
      </div>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dockswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'dockswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

</article> <!-- end article -->
