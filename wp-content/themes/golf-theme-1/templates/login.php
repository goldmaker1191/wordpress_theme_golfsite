<?php
/*
Template Name: Login
 */
redirect_if_user_logged_in();

$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;

if ( $login === "failed" ) {
    $_SESSION['alert'] = 'ERROR: Invalid username and/or password.';
    $_SESSION['alert_class'] = 'alert-danger';
} elseif ( $login === "empty" ) {
    $_SESSION['alert'] = 'ERROR: Username and/or password is empty.';
    $_SESSION['alert_class'] = 'alert-danger';
} elseif ( $login === "false" ) {
    $_SESSION['alert'] = 'ERROR: You are logged out.';
    $_SESSION['alert_class'] = 'alert-danger';
}

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';


?>
    <div class="login-bg">
        <div class="container-fluid">
            <h2 class="login-title">Login to Swingbits</h2>
            <div class="login-card d-block mx-auto">
                <form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php?wpe-login=true' ); ?>" method="post">
                    <div class="login-details">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="user_login">Email Address</label>
                                <input id="user_login" name="log" type="text" class="form-control" placeholder="email@address.com" aria-label="Email Address"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-12">
                                <label for="user_pass">Password</label>
                                <input id="user_pass" name="pwd" type="password" class="form-control" placeholder="password" aria-label="Password"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-block">Log In</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-links">
                <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Forgot Password?</a>
                <a href="/signup" title="Signup">Don't have an account?</a>
                <a href="" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a>
            </div>
            <!-- <form name="loginform" id="loginform" action="http://localhost:8080/wp-login.php" method="post">

            <p class="login-username">
                <label for="user_login">Username or Email Address</label>
                <input type="text" name="log" id="user_login" class="input" value="" size="20">
            </p>
            <p class="login-password">
                <label for="user_pass">Password</label>
                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
            </p>

            <p class="login-remember">
                <label>
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
            </p>
            <p class="login-submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-info" value="Log In">
                <input type="hidden" name="redirect_to" value="http://localhost:8080/login/">
            </p>
        </form>
        <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost Password</a> -->
        </div>
    </div>


    <?php require_once get_template_directory() . '/components/footer.php'; ?>
