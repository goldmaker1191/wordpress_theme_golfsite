<?php
/*
Template Name: About
 */
require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="about-bg">
        <div class="container-fluid">
            <h1>Improve your golf game</h1>
            <p>This is another line here. This is another line here. This is another line here. This is another line here. This
                is another line here. This is another line here. This is another line here. This is another line here.</p>
            <div class="row icon-row">
                <div class="col-6 col-sm-3">
                    <div class="icon float-left">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/golfer_icon.png" alt="">
                    </div>
                    <h3>Instruction</h3>
                    <p>Our secret to becoming a better golfer.</p>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="icon float-left">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/golfball_icon.png" alt="">
                    </div>
                    <h3>Products</h3>
                    <p>Top accessories from industry leading brands.</p>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="icon float-left">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/club_icon.png" alt="">
                    </div>
                    <h3>Equipment</h3>
                    <p>The best clubs from leading manufacturers.</p>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="icon float-left">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/membership_icon.png" alt="">
                    </div>
                    <h3>Perks</h3>
                    <p>Members receive discounts and free shipping.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid about-container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1>Our Company</h1>
                <p>We're a team of writers, creatives, developers and customer loyalty specialists. Most importantly, we're all golfers! We developed the Swingbits golf system and our store to help golfers of all skill levels improve their games and have the gear to match without breaking the bank.</p>
                <p>We're a team of writers, creatives, developers and customer loyalty specialists. Most importantly, we're all golfers! We developed the Swingbits golf system and our store to help golfers of all skill levels improve their games and have the gear to match without breaking the bank.</p>
            </div>
            <div class="col-12 col-sm-6">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/office.png" alt="">
            </div>
        </div>
    </div>


    <?php require_once get_template_directory() . '/components/footer.php'; ?>