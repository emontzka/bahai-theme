<section class="row">
    <div class="col-sm-12">
        <div class="subscribe-desktop">
        <?php 
        $form_title = get_sub_field('form_text'); 
        if ($form_title) echo $form_title; ?>
        <?php echo do_shortcode('[contact-form-7 id="155" title="Contact form 1"]'); ?>
       
       </div>
    </div>
</section>