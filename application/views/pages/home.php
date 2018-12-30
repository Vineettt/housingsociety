<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="text-center"><strong>Today's Update</strong></h4>
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
</div>
<section class="event">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="text-center"><strong>Today's Event</strong></h4>
    </div>
    <?php if(empty($daily_event)): ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="alert text-center">No Event's for today.</h4>
        </div>
    <?php endif; ?>
    <?php if(!empty($daily_event)): ?>
        <?php foreach($daily_event as $event) : ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="eventBox">
                    <div class="title"><?= $event['event_title']?></div>
                    <div class="info"><span class="start">Start On: <?= $event['event_startdate']?> From <?= $event['event_starttime']?></span><span class="end">End On: <?= $event['event_startdate']?> At <?= $event['event_starttime']?></span></div>
                    <div class="detail"><?= $event['event_detail']?></div>
                    <a class="btn btn-primary" href="<?php echo site_url('/event/view/'.$event['event_id']); ?>">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="btn_center">
            <a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>event">View Upcoming Event's</a>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>
</section>
<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="btn_center">
            <h4>Click on the below button to submit any <strong>Suggestion/Complaint</strong></h4>
            <a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>post">Suggestion / Complaint</a>
        </div>
    </div>
</div>
</div>