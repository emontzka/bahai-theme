<?php 
if (have_rows('components')):
    while (have_rows('components')):
        the_row();
        if (get_row_layout() == 'article_rows'):
                get_template_part( 'template-parts/content','articlerows');
            elseif (get_row_layout() == 'large_statement'):
                get_template_part( 'template-parts/content','statement');
            elseif (get_row_layout() == 'collections_list'):
                get_template_part( 'template-parts/content','collections-list');
            elseif (get_row_layout() == 'subscribe_form'):
                get_template_part( 'template-parts/content','subscribe');
            else:
                echo 'none found';
            endif;
    endwhile;
endif;
