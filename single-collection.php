<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bahai
 */

get_header(); ?>
	

	<main id="primary" class="site-main">
		<div class="container-fluid">

		<!-- </div> -->

		<?php while (have_posts()):
      the_post(); ?>

      <section class="post-hero">
      <div class="row">
          <div class="col-sm-12" >
         <?php  the_title('<h1 class="entry-title">', '</h1>'); ?>
          </div>
      
      </div><!--row-->
      <div class="row">
          <div class="col-md-6">
          <h4><?php echo get_the_content(); ?></h4>
          </div>
          <div class="col-md-6">
          <?php bahai_post_thumbnail(); ?>
          </div>
      </div>
      </section>

      <div class="row">
          <div class="col-lg-3 col-md-4">
          
          </div>
          <div class="col-lg-9 col-md-8">
          <div class="row">
          <?php


if( have_rows('collections') ):


    while( have_rows('collections') ) : the_row();

  
        $collection = get_sub_field('collection_item');
        // id, title, subtitle, category, permalink
        $col_ID = $collection->ID;
        $col_title = get_the_title($col_ID);
        $col_cat = get_the_category( $col_ID );
        $col_subtitle = get_field('subtitle', $col_ID);
        $col_link = get_the_permalink( $col_ID );
        // $featured_author = get_the_author_meta('display_name', $featured_query->post_author);
        $col_author = get_the_author_meta( 'display_name', $collection->post_author );
        
        // var_dump($collection);
        // echo $col_cat[0]->name; ?>
        <div class="col-lg-4 col-md-6">
        <?php echo get_the_post_thumbnail( $col_ID ); ?>
        <h3><?php echo $col_title; ?></h3>
        <h4><?php echo $col_subtitle; ?></h4>
        <p class="author">By <?php echo $col_author; ?></p>
        <p class="category"><?php echo $col_cat[0]->name; ?> </p>
        </div>

      


    <?php endwhile;

endif; 
?>
          </div>
          </div>
      </div>

     <?php // get_template_part('template-parts/content', get_post_type());

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


