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


$featured_post = get_field('featured_article',15);
$featured_ID = $featured_post->ID;
$featured_subtitle = get_field('subtitle', $featured_ID);
$featured_excerpt = get_field('excerpt', $featured_ID);
$author_id = get_post_field('post_author', $featured_ID);
$featured_author = get_the_author_meta('display_name', $author_id);
$current_cat = get_the_category($featured_ID );
 $current_cat = $current_cat[0]; // name, description, cat_ID,
 $cat_link = get_category_link($current_cat->cat_ID);

?>

	<main id="primary" class="site-main">
        <?php //var_dump($featured_post); ?>
		<div class="container-fluid">
        <!-- <a href="<?php //echo get_the_permalink( $featured_ID ); ?>" class="article-link"> -->
            <section class="blog-featured">
                
			<div class="row d-none d-lg-block">
                <div class="col-lg-12">
                <a href="<?php echo get_the_permalink( $featured_ID ); ?>" class="article-link">
                    <h1><?php echo get_the_title($featured_ID); ?></h1>
                </a>
                </div>
            </div>
            <div class="row ">
            <div class="col-lg-6"><?php echo get_the_post_thumbnail($featured_ID); ?></div>
                <div class="col-lg-6">
                <a href="<?php echo get_the_permalink( $featured_ID ); ?>" class="article-link">
                    <div class="bottom-align">
                    <h1 class="visible-xs d-lg-none"><?php echo get_the_title($featured_ID); ?></h1>
                    <h4><?php echo $featured_subtitle; ?></h4>
                    <p><?php echo $featured_excerpt; ?></p>
                    <p class="author">By <?php echo $featured_author;  ?></p>
                    <?php echo '<p class="category-text"><a href="' . $cat_link . '" >' . $current_cat->name . '</a></p>'; ?>
                    </div>
</a>
                </div>
                
            </div>

</section></a>




		<?php if (have_posts()): ?>
      <div class="row border-bottom" style="border-bottom: 1px solid #01567A;">
          <div class="col-lg-3 col-md-4 pad-r-40">
          <?php get_sidebar(  ); ?>
          </div>
          <div class="col-lg-9 col-md-8 pad-l-40">
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
      
        //  the_posts_navigation();
       
       
  else:


      //   get_template_part('template-parts/content', 'none');
  endif; ?>
  </div>
  <?php wp_pagenavi();  ?>
  <!-- subscribe form for mobile only -->
  <div class="d-md-none bottom-subscribe">
    <?php get_template_part( 'template-parts/content', 'subscribe-form' ); ?>
</div>
 </div><!--col-lg-9 col-md-8-->
 
      </div><!--row-->
      
     
	</main><!-- #main -->

<?php get_footer(); ?>