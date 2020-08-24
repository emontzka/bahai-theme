<?php
if (have_rows('two_or_three_articles')): ?>
    <?php while (have_rows('two_or_three_articles')): the_row();
    if (get_row_layout() == 'two_articles'): ?>
																					        <div class="row">
																					            <div class="col-lg-6">
																					<?php

    $article_1_2 = get_sub_field('article_one_of_two');
    $article_1_2_ID = $article_1_2->ID;
    $article_1_2_subtitle = get_sub_field('subtitle', $article_1_2_ID);
    $article_1_2_author = get_user_by('id', $article_1_2->post_author);
    // title, subtitle, author, category, thumbnail
    echo esc_html($article_1_2->post_title);
    if ($article_1_2_subtitle) {
        echo esc_html($article_1_2_subtitle);
    }
    if (get_sub_field('article_one_show_image')) {
        echo the_post_thumbnail($article_1_2_ID);
    }

    if (get_sub_field('article_one_show_excerpt')) {
        echo get_sub_field('article_one_excerpt_text');
    }
    echo "By " . $article_1_2_author->display_name;

    // var_dump($article_1_2);

    // echo "by " . get_user_by('id', 1);
    // var_dump($article_1_2_author);
    if ('article_one_show_image'):

        echo '<img src="" />';
    endif;?>
																																											                </div>
																																											                <div class="col-lg-6"></div>
																																											            </div>
																																											        <?php elseif (get_row_layout() == 'three_articles'):
    echo "three articles";
endif;
endwhile;
endif;
