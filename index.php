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

get_header();
// $featured_post = new WP_Query($args);
// $args = [
//     'post_type' => 'post',
// ];
// $fp_args = [
//     'post_type' => 'post',
// 'meta_query' => [
//     [
//         'key' => 'featured_post',
//         'value' => 1,
//     ],
// ],
// ];
// var_dump($featured_post);

// The Query



$f_args = array(
    'post_type' => 'post',
    // 'posts_per_page' => '1',
    'meta_query' => array(
        array(
            'key' => 'featured_post',
            'value' => '1',
        ),
    ),
);
// $the_query = new WP_Query($f_args);
$featured_query = get_posts($f_args);
$featured_ID = $featured_query->ID;
$featured_subtitle = get_field('subtitle', $featured_ID);
$featured_excerpt = get_field('excerpt', $featured_ID);
$featured_author = get_the_author_meta('display_name', $featured_query->post_author);
$current_cat = get_the_category($featured_ID );
 $current_cat = $current_cat[0]; // name, description, cat_ID,
 $cat_link = get_category_link($current_cat->cat_ID);

?>

	<main id="primary" class="site-main">
		<div class="container-fluid">
            <section>
                <a href="" class="article-link">
			<div class="row">
                <div class="col-lg-12">
                    
                <h1><?php echo get_the_title($featured_ID); ?></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="bottom-align">
                <h4><?php echo $featured_subtitle; ?></h4>
                <p><?php echo $featured_excerpt; ?></p>
                <p class="author">By <?php echo $featured_author;  ?></p>
                
                <?php echo '<p class="category"  style="border-bottom: 1px solid black;"><a href="' . $cat_link . '" >' . $current_cat->name . '</a></p>'; ?>
                </div>
                </div>
                <div class="col-lg-6"><?php echo get_the_post_thumbnail($featured_ID); ?></div>
            </div></a>
</section>




		<?php if (have_posts()): ?>
      <div class="row">
          <div class="col-lg-3 col-md-4">
          <?php get_sidebar(  ); ?>
          </div>
          <div class="col-lg-9 col-md-8">
          <div class="row">
          
         

      <?php while (have_posts()):
          the_post();

          
          get_template_part('template-parts/content', 'post-item');

          /*
           * Include the Post-Type-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Type name) and that will be used instead.
           */
          //get_template_part('template-parts/content', get_post_type());
      endwhile;

      //   the_posts_navigation();
  else:


      //   get_template_part('template-parts/content', 'none');
  endif; ?>
  </div>
 </div><!--col-lg-9 col-md-8-->
      </div><!--row-->
     
	</main><!-- #main -->

<?php get_footer(); ?>