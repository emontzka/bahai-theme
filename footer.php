<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bahai
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
				<div class="site-info">
        <?php wp_nav_menu([
        'theme_location' => 'menu-2',
        'menu_id' => 'footer-menu',
        'after' => '<span> | </span>'

    ]); ?>
			<p class="footer-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo(
    'template_directory'
); ?>/images/bahai-footer.svg" /><span>The Bahá’í Faith</span></a></p>
			<p>&copy; 2020 BAHÁ’Í INTERNATIONAL COMMUNITY</p>
		</div><!-- .site-info -->
				</div>
			</div>
		</div>
		


<!-- Modals -->
<?php $subscribe_modal = get_field('subscribe_modal_title','option'); ?>
<div class="modal fade" id="SubscribeForm" tabindex="-1" role="dialog" aria-labelledby="SubscribeFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $subscribe_modal ? $subscribe_modal : 'Subscribe'; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php //get_search_form( ); ?>
        <?php echo do_shortcode('[contact-form-7 id="155" title="Contact form 1"]'); ?>
      </div>
     
    </div>
  </div>
</div>
<?php $search_modal = get_field('search_modal_title','option'); ?>
<div class="modal fade" id="SearchForm" tabindex="-1" role="dialog" aria-labelledby="SearchFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $search_modal ? $search_modal : 'Search'; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php get_search_form( ); ?>
        
      </div>
     
    </div>
  </div>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) { ?>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php } ?>


</body>
</html>
