<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bahai
 */

$cats = get_terms([
     'taxonomy' => 'category',
     'hide_empty' => true,
     'exclude' => [1],
 ]);
 $cat_output = '';
 if ($cats) {
     $cat_output .= '<div class="category-widget d-none d-md-block"><h5>Topics</h5><ul>';
     foreach ($cats as $cat) {
         $cat_output .=
             '<li><p class="category-text"><a href="' .
             esc_url(get_term_link($cat)) .
             '">' .
             $cat->name .
             '</a></p></li>';
	 }
	
     $cat_output .= '</ul></div>';
     if (is_home()) {
        echo $cat_output;
     }    
 }
?>

<!-- mobile dropdown -->
<div class="d-md-none">
<h5>Topics</h5>
        <form id="category-select" class="select-drop" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

            <?php
            $args = array(
                'show_option_none' => __( 'All', 'textdomain' ),
                'show_count'       => 0,
                'orderby'          => 'name',
                'echo'             => 0,
            );
            ?>

            <?php $select  = wp_dropdown_categories( $args ); ?>
            <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
            <?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

            <?php echo $select; ?>

        

          

        </form>
    </div>

<div class="d-md-block d-none">
    <?php get_template_part( 'template-parts/content', 'subscribe-form' ); ?>
</div>


