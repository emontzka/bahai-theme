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
			<p><a href="">Contact</a> | <a href="">Legal</a> | <a href="">Privacy</a></p>
			<p class="footer-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo(
    'template_directory'
); ?>/images/bahai-footer.svg" /><span>The Bahá’í Faith</span></a></p>
			<p>&copy; 2020 BAHÁ’Í INTERNATIONAL COMMUNITY</p>
		</div><!-- .site-info -->
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>
