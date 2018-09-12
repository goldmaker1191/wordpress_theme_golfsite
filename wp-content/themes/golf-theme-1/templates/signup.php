<?php
/*
Template Name: Signup
 */

redirect_if_user_logged_in();

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="signup-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>Select plan below</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label label-width" for="exampleRadios1">
                                    7 Day Trial
                                    <span class="float-right">$1 ($49.99/mo)</span>
                                </label>
                            </div>
                            <p>7 days trial access to full swingbits program for $1, then $49.99/mo thereafter. Cancel anytime. Best deal, try before you buy!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label label-width" for="exampleRadios2">
                                    Lifetime Program
                                    <span class="float-right">$399.99 (one time)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label label-width" for="exampleRadios3">
                                    Six Month Program
                                    <span class="float-right">$199.99 (one time)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 right">
                    
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress label-width">Credit Card Number <img class="float-right" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cards.png" alt=""></label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="4242 4242 4242 4242">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputState">Month</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputState">Year</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>maybe this will help</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">CVC</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="d-none d-md-block col-md-6"> </div>
                <div class="col-12 col-md-6">
                    <div class="signup-button float-right">
                        <div class="btn btn-primary btn-signup">Create Account</div>
                        <p>Already have an account? <a href="/login">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once get_template_directory() . '/components/footer.php'; ?>