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
                <?= $notification['dn_title']?>
                <?= $notification['dn_message']?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>