<?php
/*
Template Name: Contact
 */
require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="contact-bg">
        <div class="container-fluid">
            <div class="row contact-container">
                <div class="col-12 col-lg-5">
                    <h1>Get in Touch</h1>
                    <p>Reach out to swingbits and tell us what you think! We're always here to help in any way we can! Go Rory!</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="circle">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/map.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="contact-card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 left">
                    <h3>Customer Service Team <img class="float-right" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/mail.png" alt=""></h3>
                    <p>Steve, Janice, and Kevin are here to help you!  Ask away!</p>

                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/customer_service.png" alt="">
                </div>
                <div class="col-12 col-md-4 right">
                    <h3>Contact Information</h3>
                    <br/>
                    <h3>Telephone:</h3>
                    <p>1-800-777-4457</p>
                    <br/>
                    <h3>Email:</h3>
                    <p>support@swingbits.com</p>
                    <br/>
                    <h3>Mailing Address:</h3>
                    <p>Swingbits LLC</p>
                    <p>1234 Swing Street</p>
                    <p>Las Vegas, NV 54687</p>
                </div>
            </div>

        </div>

    </div>


    <?php require_once get_template_directory() . '/components/footer.php'; ?>