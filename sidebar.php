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
     $cat_output .= '<div class="category-widget"><h5>Topics</h5><ul>';
     foreach ($cats as $cat) {
         $cat_output .=
             '<li><p class="category-text"><a href="' .
             esc_url(get_term_link($cat)) .
             '">' .
             $cat->name .
             '</a></p></li>';
	 }
	
     $cat_output .= '</ul></div>';
      echo $cat_output;
 }

 $form_title = get_field('sidebar_form_title', 'option');
 $form_description = get_field('form_description', 'option');
?>

<div class="form-widget">
<?php if ($form_title) echo $form_title; 
if ($form_description) echo $form_description; ?><br>

<button type="button" class="button secondary d-inline-block" data-toggle="modal" data-target="#SubscribeForm">Subscribe</button>
</div>

