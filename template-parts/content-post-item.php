<div class="col-lg-4 col-md-6">
<div class="bottom-align">
<?php the_post_thumbnail( ); ?>
<h3><?php the_title(); ?></h3>
<?php if(get_field('subtitle')) {
    echo '<h4>' . get_field('subtitle') . '</h4>';
} ?>
<p class="author">By <?php the_author_meta( 'display_name'); ?></p>
<p class="category " style="border-bottom: 1px solid black;"> <?php the_category( ' ' );  ?></p>

</div><!--bottom-align-->
</div><!--col-lg-->
