<?php
$related_title = get_sub_field('related_post_title');

if (have_rows('posts')):
    echo '<section class="collections-list related"><div class="row"><div class="col-sm-12">';
    if ($related_title){
        echo '<h5>'.$related_title.'</h5>';
    }
    
    echo '</div></div>';
    echo '<div class="row pad-40">';
    while (have_rows('posts')):
        the_row();
            $article = get_sub_field('post');
            $ID = $article->ID;
            $subtitle = get_field('subtitle', $ID);
            $author = get_user_by('id', $article->post_author);
            $category = get_the_category($ID);
            $permalink = get_post_permalink($ID);
            ?>

			<article class="two-three-article col-md-6">
			<div class="bottom-align">
			<?php
   echo '<a class="article-link" href="' . $permalink . '" >';
   if (get_sub_field('show_post_image')) {
       echo '<div class="article-thumb-container">' .
           get_the_post_thumbnail($ID) .
           '</div>';
   }
   echo '<h3>' . esc_html($article->post_title) . '</h3>';

   if ($subtitle) {
       echo '<h4>' . esc_html($subtitle) . '</h4>';
   }
   

   if (get_sub_field('article_excerpt')) {
       echo '<p>' . the_sub_field('post_excerpt') . '</p>';
   }
   echo '</a>';
   
   echo '<p class="author">By ' . $author->display_name . '</p>';
   if ($category) {
       echo '<p class="two-three-category category">' . $category[0]->name . '</p>';
   }
   ?>
        </div>
    </article>
        <?php
        
    endwhile;
    echo '</div>';
    echo '</section>';
endif;
