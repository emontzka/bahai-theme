
<?php 
        $col_list_title = get_sub_field('collections_title');
        echo '<section class="collections-list">';
        if ($col_list_title): ?>
        
<div class="row">
    <div class="col-sm-12">
        <h5><?php echo $col_list_title; ?></h5>
    </div>
</div>
<?php endif;
        // Check rows exists.
        if (have_rows('collections')):
            echo '<div class="row pad-40">';
            while (have_rows('collections')):
                the_row();

                $collection = get_sub_field('collection_item');
                $ID = $collection->ID;
                $permalink = get_post_permalink($ID);
                $thumb = get_the_post_thumbnail($ID);

                echo '<div class="col-md-6 collection-item">';
                echo '<a class"article-link" href="' . $permalink . '">';
                echo '<div class="red-hover">' .
                    get_the_post_thumbnail($ID, 'full', [
                        'class' => 'img-responsive',
                    ]) .
                    '</div>';
                echo '<h3>' . $collection->post_title . '</h3>';
                echo '</a></div>';
            endwhile;
            echo '</div>'; //row
        endif; ?>
</section>

