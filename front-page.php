<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bahai
 */

get_header(); ?>

	<main id="primary" class="site-main">
        <?php
        $featured = get_field('home_featured_post');
        $f_excerpt = get_field('featured_post_custom_excerpt');
        $authorID = $featured->post_author;
        $title = get_the_title($featured->ID);
        $thumb = get_the_post_thumbnail_url();
        ?>

<div class="hero-area" >
<div class="hero-image-container" style='background-image: url("<?php echo $thumb; ?>");'></div>
<div class=" hero-text-container">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 hero-text-area">
            <h2 class="h1"><?php echo $title; ?></h2>
            <p><?php echo $f_excerpt; ?></p>
            <p>By <?php echo the_author_meta('display_name', $authorID); ?></p>
        </div>
    </div>
    </div>
</div>

</div>


<div class="container-fluid">

<?php get_template_part('template-parts/content', 'article-rows'); ?>
<?php get_template_part('template-parts/content', 'statement'); ?>


		<?php if (have_posts()):
      if (is_home() && !is_front_page()): ?>
																																											    <header>
																																											        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
																																											    </header>
																																											    <?php endif; /* Start the Loop */
      while (have_posts()):
          the_post(); /*
           * Include the Post-Type-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Type name) and that will be used instead.
           */ // get_template_part('template-parts/content', get_post_type());
      endwhile;
      the_posts_navigation();
  else:
       // get_template_part('template-parts/content', 'none');
  endif; ?>

	</main><!-- #main -->
    </div><!--container -->
<?php // get_sidebar();
get_footer();
