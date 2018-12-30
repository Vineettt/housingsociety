<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="text-center">Today's Update</h4>
    </div>
    <?php if(empty($daily_notification)): ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="alert alert-success text-center">No notifocation for today.</h4>
        </div>
    <?php endif; ?>
    <?php if(!empty($daily_notification)): ?>
        <?php foreach($daily_notification as $notification) : ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="notificationBox">
                    <div class="title"><?= $notification['dn_title']?></div>
                    <div class="body"><?= $notification['dn_message']?></div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="btn_center">
            <h4>Click on the below button to submit any <strong>Suggestion/Complaint</strong></h4>
            <a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>post">Suggestion / Complaint</a>
        </div>
    </div>
</div>