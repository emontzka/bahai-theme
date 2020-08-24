<?php
if (have_rows('article_rows')):
    echo '<section>';
    while (have_rows('article_rows')):
        the_row();

        $row_count = count(get_sub_field('articles'));
        $bootstrap = $row_count === 2 ? 'col-lg-6' : 'col-lg-4';
        echo '<div class="row">';
        while (have_rows('articles')):

            the_row();
            $article = get_sub_field('article');
            $ID = $article->ID;
            $subtitle = get_field('subtitle', $ID);
            $author = get_user_by('id', $article->post_author);
            $category = get_the_category($ID);
            ?>
            <!-- <div class="row"> -->
            <article class="<?php echo $bootstrap; ?>">
           <?php
           if (get_sub_field('show_article_image')) {
               echo get_the_post_thumbnail($ID);
           }
           echo '<h3>' . esc_html($article->post_title) . '</h3>';

           if ($subtitle) {
               echo '<h4>' . esc_html($subtitle) . '</h4>';
           }

           if (get_sub_field('article_excerpt')) {
               echo '<p>' . the_sub_field('article_excerpt') . '</p>';
           }
           if ($category) {
               echo $category[0]->name;
               // var_dump($category);
           }
           ?>


            </article>
           
        <?php
        endwhile;
        echo '</div>';
    endwhile;
    echo '</section>';
endif;
