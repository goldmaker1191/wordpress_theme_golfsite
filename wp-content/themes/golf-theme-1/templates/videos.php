<?php
/*
Template Name: Videos
 */

//redirect user to login if trying to access this page not logged in
redirect_if_user_not_logged_in();

require_once get_template_directory() . '/components/header.php';
require_once get_template_directory() . '/components/navigation.php';

?>
    <div class="container-fluid content-container">
        <div class="row">
            <div class="col-sm-2 d-none d-sm-block"></div>
            <div class="col-xs-12 col-sm-10">
                <h3 class="video-header">Fundamentals of Golf</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 d-block d-sm-none">
                <div class="btn-group btn-group-toggle flex-wrap mobile-radios" data-toggle="buttons">
                    <label class="btn btn-secondary active" for="all">
                        <input type="radio" name="category" value="all"> All
                    </label>
                    <label class="btn btn-secondary" for="fundamentals">
                        <input type="radio" name="category" value="fundamentals"> Fundamentals
                    </label>
                    <label class="btn btn-secondary" for="driver">
                        <input type="radio" name="category" value="driver"> Driver
                    </label>
                    <label class="btn btn-secondary" for="irons">
                        <input type="radio" name="category" value="irons"> Irons
                    </label>
                    <label class="btn btn-secondary" for="wedges">
                        <input type="radio" name="category" value="wedges"> Wedges
                    </label>
                    <label class="btn btn-secondary" for="chipping">
                        <input type="radio" name="category" value="chipping"> Chipping
                    </label>
                    <label class="btn btn-secondary" for="putting">
                        <input type="radio" name="category" value="putting"> Putting
                    </label>
                </div>
            </div>
            <div class="col-sm-2 d-none d-sm-block">
                <div class="video-menu">
                    <h4>Show Results for</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="all" value="all" checked>
                        <label class="form-check-label" for="all">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="fundamentals" value="fundamentals">
                        <label class="form-check-label" for="fundamentals">
                            Fundamentals
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="category" id="driver" value="driver">
                        <label class="form-check-label" for="driver">
                            Driver
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="irons" value="irons">
                        <label class="form-check-label" for="irons">
                            Irons
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="wedges" value="wedges">
                        <label class="form-check-label" for="wedges">
                            Wedges
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="chipping" value="chipping">
                        <label class="form-check-label" for="chipping">
                            Chipping
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="putting" value="putting">
                        <label class="form-check-label" for="putting">
                            Putting
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-xs-12">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#overviewModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/overview_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#overviewModal">
                            <h4>Overview</h4>
                        </a>
                        <a data-toggle="modal" data-target="#overviewModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#gripModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grip_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#gripModal">
                            <h4>The Grip</h4>
                        </a>
                        <a data-toggle="modal" data-target="#gripModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#setupModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/setup_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#setupModal">
                            <h4>The Setup</h4>
                        </a>
                        <a data-toggle="modal" data-target="#setupModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#takeaway1Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/takeaway1_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#takeaway1Modal">
                            <h4>The Takeaway Part 1</h4>
                        </a>
                        <a data-toggle="modal" data-target="#takeaway1Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#takeaway2Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/takeaway2_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#takeaway2Modal">
                            <h4>The Takeaway Part 2</h4>
                        </a>
                        <a data-toggle="modal" data-target="#takeaway2Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#impact1Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/impact1_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#impact1Modal">
                            <h4>The Impact Part 1</h4>
                        </a>
                        <a data-toggle="modal" data-target="#impact1Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#impact2Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/impact2_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#impact2Modal">
                            <h4>The Impact Part 2</h4>
                        </a>
                        <a data-toggle="modal" data-target="#impact2Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail fundamentals">
                        <a data-toggle="modal" data-target="#finishModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/finish_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#finishModal">
                            <h4>The Finish</h4>
                        </a>
                        <a data-toggle="modal" data-target="#finishModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Fundamentals</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail irons">
                        <a data-toggle="modal" data-target="#ironsModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/irons_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#ironsModal">
                            <h4>Irons</h4>
                        </a>
                        <a data-toggle="modal" data-target="#ironsModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail driver">
                        <a data-toggle="modal" data-target="#driver1Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/driver1_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#driver1Modal">
                            <h4>Driver Part 1</h4>
                        </a>
                        <a data-toggle="modal" data-target="#driver1Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail driver">
                        <a data-toggle="modal" data-target="#driver2Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/driver2_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#driver2Modal">
                            <h4>Driver Part 2</h4>
                        </a>
                        <a data-toggle="modal" data-target="#driver2Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail driver">
                        <a data-toggle="modal" data-target="#driver3Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/driver3_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#driver3Modal">
                            <h4>Driver Part 3</h4>
                        </a>
                        <a data-toggle="modal" data-target="#driver3Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail wedges">
                        <a data-toggle="modal" data-target="#wedges1Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/wedges1_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#wedges1Modal">
                            <h4>Wedges Part 1</h4>
                        </a>
                        <a data-toggle="modal" data-target="#wedges1Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail wedges">
                        <a data-toggle="modal" data-target="#wedges2Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/wedges2_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#wedges2Modal">
                            <h4>Wedges Part 2</h4>
                        </a>
                        <a data-toggle="modal" data-target="#wedges2Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail chipping">
                        <a data-toggle="modal" data-target="#chipping1Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/chipping1_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#chipping1Modal">
                            <h4>Chipping Part 1</h4>
                        </a>
                        <a data-toggle="modal" data-target="#chipping1Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail chipping">
                        <a data-toggle="modal" data-target="#chipping2Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/chipping2_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#chipping2Modal">
                            <h4>Chipping Part 2</h4>
                        </a>
                        <a data-toggle="modal" data-target="#chipping2Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail chipping">
                        <a data-toggle="modal" data-target="#chipping3Modal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/chipping3_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#chipping3Modal">
                            <h4>Chipping Part 3</h4>
                        </a>
                        <a data-toggle="modal" data-target="#chipping3Modal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                    
                    <div class="col-sm-6 col-xs-12 col-lg-4 video-thumbnail putting">
                        <a data-toggle="modal" data-target="#puttingModal">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/putting_thumb.png" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#puttingModal">
                            <h4>Putting</h4>
                        </a>
                        <a data-toggle="modal" data-target="#puttingModal">
                            <p>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/blue-smiley.png" alt=""> Drills</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Modal -->
    <div class="modal fade" id="overviewModal" tabindex="-1" role="dialog" aria-labelledby="overviewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="overviewModalLabel">Overview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280424305" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- grip Modal -->
     <div class="modal fade" id="gripModal" tabindex="-1" role="dialog" aria-labelledby="gripModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gripModalLabel">The Grip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280424963" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- setup Modal -->
    <div class="modal fade" id="setupModal" tabindex="-1" role="dialog" aria-labelledby="setupModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="setupModalLabel">The Setup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280425510" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- takeaway1 Modal -->
    <div class="modal fade" id="takeaway1Modal" tabindex="-1" role="dialog" aria-labelledby="takeaway1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="takeaway1ModalLabel">The Takeaway Part 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280426665" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- takeaway2 Modal -->
    <div class="modal fade" id="takeaway2Modal" tabindex="-1" role="dialog" aria-labelledby="takeaway2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="takeaway2ModalLabel">The Takeaway Part 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280428023" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- impact1 Modal -->
    <div class="modal fade" id="impact1Modal" tabindex="-1" role="dialog" aria-labelledby="impact1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="impact1ModalLabel">The Impact Part 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280429116" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- impact2 Modal -->
    <div class="modal fade" id="impact2Modal" tabindex="-1" role="dialog" aria-labelledby="impact2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="impact2ModalLabel">The Impact Part 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280431128" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- finish Modal -->
    <div class="modal fade" id="finishModal" tabindex="-1" role="dialog" aria-labelledby="finishModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="finishModalLabel">The Finish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343664" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- wedges1 Modal -->
    <div class="modal fade" id="wedges1Modal" tabindex="-1" role="dialog" aria-labelledby="wedges1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wedges1ModalLabel">Wedges Part 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343703" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- wedges2 Modal -->
    <div class="modal fade" id="wedges2Modal" tabindex="-1" role="dialog" aria-labelledby="wedges2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wedges2ModalLabel">Wedges Part 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343710" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- irons Modal -->
    <div class="modal fade" id="ironsModal" tabindex="-1" role="dialog" aria-labelledby="ironsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ironsModalLabel">Irons</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343684" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- driver1 Modal -->
    <div class="modal fade" id="driver1Modal" tabindex="-1" role="dialog" aria-labelledby="driver1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="driver1ModalLabel">Driver Part 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343677" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- driver2 Modal -->
    <div class="modal fade" id="driver2Modal" tabindex="-1" role="dialog" aria-labelledby="driver2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="driver2ModalLabel">Driver Part 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343672" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- driver3 Modal -->
    <div class="modal fade" id="driver3Modal" tabindex="-1" role="dialog" aria-labelledby="driver3ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="driver3ModalLabel">Driver Part 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343681" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chipping1 Modal -->
    <div class="modal fade" id="chipping1Modal" tabindex="-1" role="dialog" aria-labelledby="chipping1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chipping1ModalLabel">Chipping Part 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280433331" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chipping2 Modal -->
    <div class="modal fade" id="chipping2Modal" tabindex="-1" role="dialog" aria-labelledby="chipping2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chipping2ModalLabel">Chipping Part 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/280435068" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chipping3 Modal -->
    <div class="modal fade" id="chipping3Modal" tabindex="-1" role="dialog" aria-labelledby="chipping3ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chipping3ModalLabel">Chipping Part 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343668" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- putting Modal -->
    <div class="modal fade" id="puttingModal" tabindex="-1" role="dialog" aria-labelledby="puttingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="puttingModalLabel">Putting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="padding:0 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/281343693" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <?php require_once get_template_directory() . '/components/footer.php'; ?>

    <!-- This script pauses the player on modal close and resets video to beginning -->
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script type="text/javascript">
        jQuery('iframe').each(function () {
            const player = new Vimeo.Player(this);
            jQuery('.modal').on('hidden.bs.modal', function () {
                console.log('closed');
                player.pause().then(function () {
                    player.setCurrentTime(0.00);
                });
            })
        });

        const filterVideos = function (selected) {
            if (selected === 'all') {
                jQuery('.video-thumbnail').removeClass('d-none');
                return;
            }

            setTimeout(function () {
                jQuery('.video-thumbnail').not('.' + selected).addClass('d-none');
                jQuery('.' + selected).removeClass('d-none');
            }, 10);

        }

        // calls video filter for mobile radios - timeout for bootstrap radio to set
        jQuery(".btn.btn-secondary").click(function () {
            setTimeout(function () {
                const selected = jQuery('input[name=category]:checked').val();
                filterVideos(selected);
            }, 10);

        });

        // calls video filter for desktop radios 
        jQuery("input[name='category']").click(function () {
            const selected = this.value;
            filterVideos(selected);
        });
    </script>