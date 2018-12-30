<div class="row">
    <h2 class="text-center"><?= $title ?></h2>
    <?php foreach($events as $event) : ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="eventBox">
                <div class="title"><?= $event['event_title']?></div>
                <div class="info"><span class="start">Start On: <?= $event['event_startdate']?> From <?= $event['event_starttime']?></span><span class="end">End On: <?= $event['event_startdate']?> At <?= $event['event_starttime']?></span></div>
                <div class="detail"><?= $event['event_detail']?></div>
                <a class="btn btn-primary" href="<?php echo site_url('/event/view/'.$event['event_id']); ?>">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="pagination-links">
	        <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>