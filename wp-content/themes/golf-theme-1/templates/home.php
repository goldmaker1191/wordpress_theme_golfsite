<?php
/*
Template Name: Home
 */

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="home-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <h1>Get Better at Golf Fast</h1>
                    <h2>Swingbits is an online membership program and discount golf store. We're here to help you become a better
                        golfer and get you the best products at the lowest prices!</h2>
                    <h5>HD Video Instruction | Discounted Golf Products | Free Shipping</h5>
                    <!-- If User is logged in show go to videos button -->
                    <?php if(is_user_logged_in()) { ?>
                    <a href="/videos" class="btn btn-primary home-btn d-block mx-auto">Go To My Videos</a>
                    <!-- If User is logged out go to signup button -->
                    <?php } else { ?>
                    <a href="/signup" class="btn btn-primary home-btn d-block mx-auto">Signup</a>
                    <?php } ?>
                </div>
                <div class="col-md-6 right">
                    <a href="/signup">
                        <iframe src="https://player.vimeo.com/video/280424305" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                        <!-- <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/thumbnail-holder.png" alt=""> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h1>Golf Secrets Simply Explained.</h1>
                    <p>Swingbits is the fastest, simplest way to improve your ball-striking and transform the way you play golf.
                        We've built a simple to follow system from the ground up to help you become a better golfer.</p>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <div class="videos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Videos</h5>
                    <h3>On-Demand Golf Expertise</h3>
                    <p>Watch videos with golf tips, tutorials, and drills featuring the world’s foremost golfers and golf instructors,
                        available exclusively for serious golfers like you.</p>
                </div>
                <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                    <a href="/videos">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/setup_thumb.png" alt="">
                    </a>
                    <a href="/videos">
                        <h4>The Setup</h4>
                    </a>
                    <a href="/videos">
                        <p>
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                    </a>
                </div>
                <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                    <a href="/videos">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/irons_thumb.png" alt="">
                    </a>
                    <a href="/videos">
                        <h4>Irons</h4>
                    </a>
                    <a href="/videos">
                        <p>
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Pratice</p>
                    </a>
                </div>
                <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                    <a href="/videos">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/driver1_thumb.png" alt="">
                    </a>
                    <a href="/videos">
                        <h4>Driver and Woods</h4>
                    </a>
                    <a href="/videos">
                        <p>
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="/signup">Get Unlimited Access to Videos Today. Learn More >></a>
                </div>
            </div>
        </div>
    </div>
    <div class="home-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>
                        <img class="headshot" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/zack.png" alt=""> Zack Rodgers</h3>
                    <p>"This program helped me go from a 16 to a 9 index in 3 months! Selfishly, I don't want to tell my friends
                        about the program!!!"</p>
                    <p class="float-right">Atlanta, GA</p>
                </div>
                <div class="col-sm-4">
                    <h3>
                        <img class="headshot" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/wally.png" alt=""> Wally Anderson</h3>
                    <p>"I wish I would have found this program 30 years ago! It's made the golf swing so simple. If I can do
                        it, anyone can!"</p>
                    <p class="float-right">Ft. Lauderdale, FL</p>
                </div>
                <div class="col-sm-4">
                    <h3>
                        <img class="headshot" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/harry.png" alt=""> Harry Jones</h3>
                    <p>"Swingbits made golf fun again. I no longer worry about where the ball is going to go, just pick a target
                        and fire."</p>
                    <p class="float-right">Palm Desert, CA</p>
                </div>
            </div>
        </div>
    </div>

    <div class="store">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Shop</h5>
                    <h3>Leading Products and Accessories</h3>
                    <p>Buy quality golf equipment and accessories from a curated collection of top recognized golf brands.</p>
                </div>
                <div class="col-sm-3 col-6 video-thumbnail fundamentals">
                    <a href="/store">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/products.png?v1" alt="">
                        <span class="text">Equipment</span>
                    </a>
                </div>
                <div class="col-sm-3 col-6 video-thumbnail fundamentals">
                    <a href="/store">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/accessories.png" alt="">
                        <span class="text">Accessories</span>
                    </a>
                </div>
                <div class="col-sm-3 col-6 video-thumbnail fundamentals">
                    <a href="/store">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/membership.png" alt="">
                        <span class="text">Membership Perks</span>
                    </a>
                </div>
                <div class="col-sm-3 col-6 video-thumbnail fundamentals">
                    <a href="/store">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/teaching.png" alt="">
                        <span class="text">Instruction</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action-dark">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <a href="/signup">Members Enjoy Free Domestic Shipping and Deep Discounts on All Products. Learn More >></a>
                </div>
            </div>
        </div>
    </div>
    <div class="split">
        <div class="row no-gutters">
            <div class="col-6">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/left.png" alt="">
            </div>
            <div class="col-6">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/right.png" alt="">
            </div>
        </div>
    </div>

    <?php require_once get_template_directory() . '/components/footer.php'; ?>