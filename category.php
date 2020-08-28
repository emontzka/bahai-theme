<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bahai
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php get_sidebar(  ); ?>
            </div>
            <div class="col-lg-9 col-md-8">
            

     

		<?php if ( have_posts() ) : ?>
            <div class="row"><div class="col">
				<?php
                // echo '<h1>Test</h1>';
                single_term_title('<h1 class="page-title">', '</h1>');
				// the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
                </div>
        </div>
        <div class="row">
	

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
                the_post();
               
                get_template_part('template-parts/content', 'post-item');
               
// echo the_title( );
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );

            endwhile;
            echo '<div'; //row

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
        ?>
        </div>
               </div><!--col-lg-9-->
    </div><!--row-->
        </div><!--container-->

	</main><!-- #main -->

<?php

get_footer();
