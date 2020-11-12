<?php 
 $form_title = get_field('sidebar_form_title', 'option');
 $form_description = get_field('form_description', 'option'); ?>
<div class="form-widget">
<?php if ($form_title) echo $form_title; 
if ($form_description) echo $form_description; ?><br>

<button type="button" class="button secondary d-inline-block" data-toggle="modal" data-target="#SubscribeForm">Subscribe</button>
</div>