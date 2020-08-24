<?php
$lsa = get_field('large_statement_area');
$statement = $lsa['text'];
$button_one_text = $lsa['button_one_text'];
$button_one_link = $lsa['button_one_link'] || '';
$button_two_text = $lsa['button_two_text'];
$button_two_link = $lsa['button_two_link'] || '';

if ($lsa) { ?>

    <section class="row">
        <div class="col-sm-12">
        <?php echo $statement; ?>

        </div>
    </section>
<?php }
?>
