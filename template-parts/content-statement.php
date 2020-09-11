<?php

$statement = get_sub_field('text');
$button_one_text = get_sub_field('button_one_text');
$button_one_link = get_sub_field('button_one_link');
$button_two_text = get_sub_field('button_two_text');
$button_two_link = get_sub_field('button_two_link');

?>

    <section class="row">
        <div class=" col-sm-12">
            <div class="statement">
            <?php echo $statement;
    echo '<div class="statement-buttons">';
    if ($button_one_text) {
        echo '<a class="button primary" href="' . $button_one_link . '" >' . $button_one_text . '</a> ';
    }
    if ($button_two_text) {
        echo '<a class="button secondary" href="' . $button_two_link . '" >' . $button_two_text . '</a> ';
    }
    echo '</div'; //statement-buttons
     ?>

            </div>
        </div>
    </section>
<?php 
?>
