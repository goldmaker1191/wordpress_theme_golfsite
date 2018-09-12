<?php
/*
Template Name: My Account
 */

//redirect user to login if trying to access this page not logged in
redirect_if_user_not_logged_in();

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

$current_user = wp_get_current_user();

?>
    <div class="my-account-bg">
        <div class="container-fluid content-container">
            <div class="row">
                <div class="col-xs-12 d-block d-sm-none">

                </div>
                <div class="col-sm-2 d-none d-sm-block">

                </div>

                <div class="col-sm-10 col-xs-12">
                    <div class="well">
                        <div class="header">
                            <h3 class="float-left">Profile</h3>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#edit-modal">Edit</button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body">
                            <form class="form-inline" autocomplete="off">
                                <div class="form-group col-12">
                                    <label for="email">Email:</label>
                                    <input id="email" autocomplete="off" class="form-control mx-sm-3" value="<?php echo $current_user->user_email; ?>" disabled>
                                </div>
                                <div class="form-group col-12">
                                    <label for="name">Name:</label>
                                    <input id="name" autocomplete="off" class="form-control mx-sm-3" value="<?php echo $current_user->display_name . ' ';?>"
                                        disabled>
                                </div>
                                <div class="form-group col-12">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" autocomplete="off" class="form-control mx-sm-3" value="password" disabled>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="well">
                        <div class="header">
                            <h3 class "float-left">Account Info</h3>
                            <button class="btn btn-danger float-right" data-toggle="modal" data-target="#cancel-modal">Cancel Account</button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body">
                            <form class="form-inline">
                                <div class="form-group col-12">
                                    <label for="plan">Plan</label>
                                    <input type="text" id="plan" class="form-control mx-sm-3" value="Monthly $49.99/mo" disabled>
                                </div>
                                <div class="form-group col-12">
                                    <label for="card-number">Credit Card:</label>
                                    <input type="text" id="card-number" class="form-control mx-sm-3" value="**** **** **** 3208" aria-describedby="creditcard-helper" disabled>
                                    <small id="creditcard-helper" class="text-muted">
                                        Last 4 digits of card number.
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancel Modal -->
    <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cancel Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Cancel account here.</h3>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">Cancel My Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Update account here.</h3>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Update Profile</button>
                </div>
            </div>
        </div>
    </div>


    <?php require_once get_template_directory() . '/components/footer.php'; ?>