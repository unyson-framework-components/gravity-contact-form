<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$title = $atts['title'];
$form_name = $atts['form_name'];
$background = $atts['background_image']['url'];
$form_anchor = strtolower(preg_replace('/\s*/', '', $form_name.'_gravity_form'));
?>

<section id="<?php echo $form_anchor; ?>" class="contact-form-section full-width-section">
    <?php if($background !== null && $background !== '') { ?>
        <div class="background-overlay" style="background-image: url('<?php echo $background; ?>')"></div>
    <?php } ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-wrapper">
                    <h2>
                        <svg>
                            <use xlink:href="#icon-chat"></use>
                        </svg>

                        <?php echo $title; ?>
                    </h2>

                    <?php if ($form_name !== null && $form_name !== '') gravity_form($form_name, false, false, false, '', true, 12); ?>
                </div>
            </div>
        </div>
    </div>
</section>