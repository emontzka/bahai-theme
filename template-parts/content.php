<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bahai
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
$auth_name =  get_the_author_meta('display_name', $authorID); 
$auth_desc = get_the_author_meta('description', $authorID); 
$pdf = get_field('post_pdf'); ?>


	<div class="entry-content">


		<?php if (have_rows('post_content')):
      //   echo 'has post content';
      $row_count = 1;
      while (have_rows('post_content')):
          the_row();

          //   echo 'has post content';
          if (get_row_layout() == 'text_content'):
              $text = get_sub_field('text'); ?>
			  <div class="row">
			  <div class="col-lg-3 col-md-4" >
				<?php if ($row_count === 1) {
          
          echo '<p class="author">By ' . $auth_name . '</p>'; 
          echo '<figcaption>' . $auth_desc . '</figcaption>'; 
          $share_buttons = '<div class="share-button-container"><p class="author post-actions"><span class="share-button">Share<i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></span>'; 
          $share_buttons .= '<span class="print-button">Print<i class="fas fa-print"></i></span>';
          if ($pdf) {
            $share_buttons .= '<a href="' . $pdf['url'] . '" target="_blank">Save<i class="fas fa-download"></i></a>';
          }
          $share_buttons .= '</p>';
          echo $share_buttons;

           //'<p class="author post-actions"><span>Share<i class="fas fa-chevron-down"></i></span> <span class="print-button">Print<i class="fas fa-print"></i></span> Save<i class="fas fa-download"></i></p>';
          echo do_shortcode("[social_share_button themes='theme1']"); 
          echo '</div>';

    } ?>
			  </div>
			  <div class="col-lg-9 col-md-8 text-section <?php echo $row_count === 1 ? 'first-text' : ''; ?>">
				<?php echo $text; ?>
				<?php the_field('text'); ?>
			  </div>
			  </div>

             <?php $row_count++;
             //   echo 'has image content'; //echo '<img src="' . $img[''] . '" />'; //var_dump($img);
             //var_dump($img);
          elseif (get_row_layout() == 'full_width_image'):
              $img = get_sub_field('image'); ?>
			  <div class="row post-image-row">
			  <div class="col-lg-3 col-md-4 position-relative">
        <hr class="top-rule">
          <figcaption><?php echo $img['caption']; ?></figcaption>
          <hr class="bottom-rule">
			  </div>
			  <div class="col-lg-9 col-md-8">
				  <?php
              //var_dump($img);
              ?>
			  <?php echo '<img src="' . $img['url'] . '" alt="' . $img['alt'] . '"/>'; ?>
			  </div>
		  </div>
              <?php $row_count++;
          endif;
      endwhile;

      // No value.
  else:


      // Do something...
  endif; ?>
  <div class="row">
  <div class="offset-lg-3 offset-md-4 col-lg-9 col-md-8">
  <?php get_template_part('template-parts/content', 'collections-list'); ?>
  </div>

<?php
//   the_content(
//       sprintf(
//           wp_kses(
//               /* translators: %s: Name of current post. Only visible to screen readers */
//               __(
//                   'Continue reading<span class="screen-reader-text"> "%s"</span>',
//                   'bahai'
//               ),
//               [
//                   'span' => [
//                       'class' => [],
//                   ],
//               ]
//           ),
//           wp_kses_post(get_the_title())
//       )
//   );
?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php bahai_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
