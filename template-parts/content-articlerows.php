<?php

if (have_rows('row')):
    echo '<section class="two-three-section">';
    while (have_rows('row')):
        the_row();
        // echo 'template has row';
        $row_count = count(get_sub_field('article'));
        $bootstrap = $row_count === 2 ? 'col-md-6' : 'col-md-4';
        echo '<div class="row pad-40">';
        while (have_rows('article')):
            the_row();
            // echo 'has articles ';
            $article = get_sub_field('article');
            $ID = $article->ID;
            $subtitle = get_field('subtitle', $ID);
            $author = get_user_by('id', $article->post_author);
            $category = get_the_category($ID);
            $permalink = get_post_permalink($ID);
            // $catslug = $category[0];
            $catlink = get_term_link($category[0]);
           
            
            ?>

			<article class="two-three-article <?php echo $bootstrap; ?>">
			<div class="bottom-align">
			<?php
   echo '<a class="article-link" href="' . $permalink . '" >';
   if (get_sub_field('show_article_image')) {
       echo '<div class="article-thumb-container" style="background-image: url('.get_the_post_thumbnail_url().')">' .
           //get_the_post_thumbnail($ID) .
           '</div>';
   }
   echo '<h3>' . esc_html($article->post_title) . '</h3>';

   if ($subtitle) {
       echo '<h4>' . esc_html($subtitle) . '</h4>';
   }
   

   if (get_sub_field('article_excerpt')) {
       echo '<p>' . the_sub_field('article_excerpt') . '</p>';
   }
   echo '</a>';
   
   echo '<p class="author">By ' . $author->display_name . '</p>';
   if ($category) {
    //    echo $catlink;
       echo '<p class="two-three-category category-text"><a href="'.$catlink.'">' . $category[0]->name . '</a></p>';
   }
   ?>


        </div>
    </article>

        <?php
        endwhile;
        echo '</div>';
    endwhile;
    echo '</section>';
endif;
