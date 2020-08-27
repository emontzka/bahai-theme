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
 $cats = get_terms([
     'taxonomy' => 'category',
     'hide_empty' => true,
     'exclude' => [1],
 ]);
 $cat_output = '';
 if ($cats) {
     $cat_output .= '<ul>';
     foreach ($cats as $cat) {
         $cat_output .=
             '<li><a href="' .
             esc_url(get_term_link($cat)) .
             '">' .
             $cat->name .
             '</a></li>';
     }
     $cat_output .= '</ul>';
     //  echo 'Cat output: <br>' . $cat_output;
 }

 $current_cat = get_the_category();
 $current_cat = $current_cat[0]; // name, description, cat_ID,
 $cat_link = get_category_link($current_cat->cat_ID);
 $subtitle = get_field('subtitle');
 ?>
	<main id="primary" class="site-main">
		<div class="container-fluid">
			<section class="post-hero">
			<div class="row">
				<div class="col-lg-3 col-md-4" >
				<p>(back link)</p>
				</div>
				<div class="col-lg-9 col-md-8">
					<p class="category"><a href="<?php echo $cat_link; ?>"><?php echo $current_cat->name; ?></a></p>
					<?php
     the_title('<h1 class="entry-title">', '</h1>');
     echo '<h4>' . $subtitle . '</h4>';
     ?>

				
				
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
				</div>
				<div class="col-lg-9 col-md-8">
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

	</main><!-- #main -->

<?php get_footer(); ?>


