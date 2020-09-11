<?php
/**
 * 
 * Template Name: collections
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bahai
 */

get_header(); ?>

<?php 

$featured_ID = get_field('featured_collection');
$c_args = array(
    'post_type' => 'collection'
);


$collection_query = new WP_Query($c_args); 
$collections = $collection_query->posts;
$featured_post = array();

foreach($collections as $collection) {
    if ($collection->ID === $featured_ID) {
        $featured_post[0] = $collection;
    }
}
// var_dump($featured_post[0]);
// setup_postdata( $featured_post );
?>

<div class="container-fluid">
<div class="row">
    <div class="offset-lg-1 col-lg-10 featured-collection">
    <h1 class="text-center"><?php echo get_the_title($featured_ID); ?></h1>
    <?php echo get_the_post_thumbnail($featured_ID); ?>
    <h4 class="text-center"><?php echo $featured_post[0]->post_content;?></h4>
    <div class="d-flex justify-content-center">

    
    <a class="button primary text-center" href="<?php echo get_the_permalink($featured_ID); ?>">Explore the Collection</a>

    </div>
    </div>
</div>

<?php //wp_reset_postdata($featured_post);


wp_reset_postdata();

// get_template_part('template-parts/content', 'collections-list'); 
get_template_part('template-parts/content', 'components'); 

?>

	</main><!-- #main -->
    </div><!--container-->

<?php

get_footer();

