<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bahai
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="page-header">
<?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
</header>
<div class="container-fluid">
        <div class="row">
	<div class="entry-content pull">
    <div class="col-lg-10 offset-lg-1">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()): ?>
		<footer class="entry-footer">
			<?php edit_post_link(
       sprintf(
           wp_kses(
               /* translators: %s: Name of current post. Only visible to screen readers */
               __('Edit <span class="screen-reader-text">%s</span>', 'bahai'),
               [
                   'span' => [
                       'class' => [],
                   ],
               ]
           ),
           wp_kses_post(get_the_title())
       ),
       '<span class="edit-link">',
       '</span>'
   ); ?>
		</footer><!-- .entry-footer -->
    <?php endif; ?>
    </div>
        </div>
        <?php get_template_part( 'template-parts/content', 'components' ); ?>
    </div><!-- container -->

</article><!-- #post-<?php //the_ID(); ?> -->

