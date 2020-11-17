<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bahai
 */

get_header(); ?>


	<?php


 $current_cat = get_the_category();
 $current_cat = $current_cat[0]; // name, description, cat_ID,
 $cat_link = get_category_link($current_cat->cat_ID);
 $subtitle = get_field('subtitle');
 $post_date = get_the_date( 'l F j, Y' );
 ?>
	<main id="primary" class="site-main">
		<div class="container-fluid">
			<section class="post-hero">
			<div class="row">
				<div class="col-lg-3 col-md-4" >
				<p class="back-link author"><a href="<?php echo get_permalink(15 ) ?>"><i class="fas fa-chevron-left"></i>&nbsp;BACK</a></p>
				</div>
				<div class="col-lg-9 col-md-8 pad-l-65">
					<p class="category-text"><a href="<?php echo $cat_link; ?>"><?php echo $current_cat->name; ?></a></p>
					<?php
     the_title('<h1 class="entry-title">', '</h1>');
	 echo '<h4>' . $subtitle . '</h4>';
	 echo '<p class="category-text">' . $post_date . '</p>';
     ?>

				
				
				</div>
			</div>
			<div class="row  post-hero-row">
				<div class="col-lg-3 col-md-4 caption-section">
					<?php if (has_post_thumbnail()): ?>
                <hr class="top-rule">
					<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
					<hr class="bottom-rule">
					<?php endif; ?>
                    
				</div>
				<div class="col-lg-9 col-md-8 pad-l-65">
				<?php bahai_post_thumbnail(); ?>
				</div>
			</div>
			</section>
		<!-- </div> -->

		<?php while (have_posts()):
      the_post();

      get_template_part('template-parts/content', get_post_type());

      // 	the_post_navigation(
      // 		array(
      // 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bahai' ) . '</span> <span class="nav-title">%title</span>',
      // 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bahai' ) . '</span> <span class="nav-title">%title</span>',
      // 		)
      // 	);

      // 	// If comments are open or we have at least one comment, load up the comment template.
      // 	if ( comments_open() || get_comments_number() ) :
      // 		comments_template();
      // endif;
  endwhile;
// End of the loop.
//
?>
 <?php get_template_part('template-parts/content', 'single-subscribe'); ?>
	</main><!-- #main -->

<?php get_footer(); ?>


