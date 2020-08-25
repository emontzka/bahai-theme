<?php
if (have_rows('article_rows')):
    echo '<section class="two-three-section">';
    while (have_rows('article_rows')):
        the_row();

        $row_count = count(get_sub_field('articles'));
        $bootstrap = $row_count === 2 ? 'col-md-6' : 'col-md-4';
        echo '<div class="row pad-40">';
        while (have_rows('articles')):

            the_row();
            $article = get_sub_field('article');
            $ID = $article->ID;
            $subtitle = get_field('subtitle', $ID);
            $author = get_user_by('id', $article->post_author);
            $category = get_the_category($ID);
            $permalink = get_post_permalink($ID);
            ?>

			<article class="two-three-article <?php echo $bootstrap; ?>">
			<!-- <div class="article-flex"> -->
			<?php
   echo '<a class="article-link" href="' . $permalink . '" >';
   if (get_sub_field('show_article_image')) {
       echo '<div class="article-thumb-container">' .
           get_the_post_thumbnail($ID) .
           '</div>';
   }
   echo '<h3>' . esc_html($article->post_title) . '</h3>';

   if ($subtitle) {
       echo '<h4>' . esc_html($subtitle) . '</h4>';
   }
   echo '</a>';

   if (get_sub_field('article_excerpt')) {
       echo '<p>' . the_sub_field('article_excerpt') . '</p>';
   }
   if ($category) {
       echo '<p class="two-three-category">' . $category[0]->name . '</p>';
       // var_dump($category);
   }
   ?>


        <!-- </div> -->
    </article>

        <?php
        endwhile;
        echo '</div>';
    endwhile;
    echo '</section>';
endif;
