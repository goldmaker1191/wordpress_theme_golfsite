<?php $isAlert = isset($_SESSION['alert']); if($isAlert) { ?>
    <div class="alert <?php echo $_SESSION['alert_class']; ?> alert-dismissible fade show" role="alert">
        <strong>
            <?php echo $_SESSION['alert']; ?>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php unset($_SESSION['alert'], $_SESSION['alert_class']); }?>