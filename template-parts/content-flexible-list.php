
<?php 
    // repeater of title, image, text, buttontext, link
    if (have_rows('flexible_list')):
        while (have_rows('flexible_list')): the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');
        $text = get_sub_field('text');
        $buttonText = get_sub_field('button_text');
        $buttonLink = get_sub_field('button_link'); ?>
        <div class="row special-collections">
            <div class="col-lg-6">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <div class="col-lg-6 align-self-center">
                <h3><?php echo $title; ?></h3>
                <?php echo $text; 
                if ($buttonText && $buttonLink): ?>
                <a href="<?php echo $buttonLink; ?>" class="button primary text-center"><?php echo $buttonText; ?></a>
                <?php endif; ?>
            </div>
        </div>

        <?php endwhile;
    endif;

