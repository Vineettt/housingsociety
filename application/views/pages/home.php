<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="text-center">Today's Update</h4>
    </div>
    <?php foreach($daily_notification as $notification) : ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?= $notification['dn_title']?>
            <?= $notification['dn_message']?>
        </div>
    <?php endforeach; ?>
</div>