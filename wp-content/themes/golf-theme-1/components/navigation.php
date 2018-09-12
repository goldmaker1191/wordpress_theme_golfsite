<?php
function isActive($route) {
    global $wp;
    $current_url = home_url(add_query_arg(array(),$wp->request));
    if (stripos($current_url, $route) !== false) {
        echo 'active';
    }
    
}

//i'm goign to add comments
//so this updates
require_once get_template_directory() . '/components/alerts.php';
if ( is_user_logged_in() ) {
    // your code for logged in user 
?>
    <!-- LOGGED IN USER -->
    <!-- LOGGED IN USER -->
    <!-- LOGGED IN USER -->
    <!-- LOGGED IN USER -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-color">
        <a class="navbar-brand" href="/"><img class="headshot" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logov3.png" alt="logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php active_menu_item(''); ?>">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?php active_menu_item('videos'); ?>">
                    <a class="nav-link" href="videos">Videos</a>
                </li>
                <li class="nav-item <?php active_menu_item('store'); ?>">
                    <a class="nav-link" href="store">Store</a>
                </li>
                <li class="nav-item <?php active_menu_item('myaccount'); ?>">
                    <a class="nav-link" href="/myaccount">My Account</a>
                </li>
            </ul>
            <a href="<?php echo wp_logout_url(); ?>">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Log Out</button>
            </a>
        </div>
    </nav>

    <?php } else { // your code for logged out user ?>
    <!-- LOGGED OUT USER -->
    <!-- LOGGED OUT USER -->
    <!-- LOGGED OUT USER -->
    <!-- LOGGED OUT USER -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-color">
        <a class="navbar-brand" href="/"><img class="headshot" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logov3.png" alt="logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php active_menu_item(''); ?>">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?php active_menu_item('videos'); ?>">
                    <a class="nav-link" href="/videos">Videos</a>
                </li>
                <li class="nav-item <?php active_menu_item('store'); ?>">
                    <a class="nav-link" href="store">Store</a>
                </li>
                <li class="nav-item <?php active_menu_item('faq'); ?>">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item <?php active_menu_item('about'); ?>">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item <?php active_menu_item('contact'); ?>">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>

            <a href="/login">
                <button class="btn btn-info my-2 my-sm-0 login-btn" type="submit">Log In</button>
            </a>


            <a href="/signup">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Sign Up</button>
            </a>

        </div>
    </nav>
    <?php }?>
    
    <div id="content" class="site-content">