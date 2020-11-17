<div class="col-lg-4 col-md-6 post-item">
<div class="bottom-align">
    <a href="<?php the_permalink(  ); ?>" class="article-link">
<div class="article-thumb-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <?php if (get_field('overlay_text')) {
        echo '<p class="overlay">' . get_field('overlay_text') . '</p>';
    } ?>
<?php //the_post_thumbnail( ); ?>
</div>
<h3><?php the_title(); ?></h3>
<?php if(get_field('subtitle')) {
    echo '<h4>' . get_field('subtitle') . '</h4>';
} ?>
</a>
<p class="author">By <?php the_author_meta( 'display_name'); ?></p>
<p class="category-text " > <?php the_category( ' ' );  ?></p>

</div><!--bottom-align-->
</div><!--col-lg post item-->
