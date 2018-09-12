<?php
/*
Template Name: Store
 */

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="container-fluid">
        <img class="d-block mx-auto" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/coming-soon.png" alt="">
    </div>

<?php require_once get_template_directory() . '/components/footer.php'; ?>