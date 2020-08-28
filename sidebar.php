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
             '<li><a href="' .
             esc_url(get_term_link($cat)) .
             '">' .
             $cat->name .
             '</a></li>';
	 }
	
     $cat_output .= '</ul></div>';
      echo $cat_output;
 }

 $form_title = get_field('form_title', 'option');
 $form_description = get_field('form_description', 'option');
?>

<div class="form-widget">
<?php if ($form_title) echo $form_title; 
if ($form_description) echo $form_description; ?><br>
<img src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAMABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAAIDBP/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/9oADAMBAAIQAxAAAAG3FnEqH//EABkQAAIDAQAAAAAAAAAAAAAAAAABAgMTEf/aAAgBAQABBQKPCy5I0mZodKMUf//EABQRAQAAAAAAAAAAAAAAAAAAABD/2gAIAQMBAT8BP//EABQRAQAAAAAAAAAAAAAAAAAAABD/2gAIAQIBAT8BP//EABsQAAIBBQAAAAAAAAAAAAAAAAAxAQIREjKB/9oACAEBAAY/AjGlm9ujkcjk/8QAGhABAQEBAAMAAAAAAAAAAAAAAQARIUFhsf/aAAgBAQABPyF47kUmHk58lF79JsTpkGP/2gAMAwEAAgADAAAAEBs//8QAFREBAQAAAAAAAAAAAAAAAAAAERD/2gAIAQMBAT8QSf/EABURAQEAAAAAAAAAAAAAAAAAABAx/9oACAECAQE/EKf/xAAcEAEAAgIDAQAAAAAAAAAAAAABABEh0TFhkXH/2gAIAQEAAT8QrK/aQdNONg7RWrXQldQv3MLyaicvY1Asepqf/9k=" />
<button type="button" class="button primary d-inline-block" data-toggle="modal" data-target="#SubscribeForm">Subscribe</button>
</div>

