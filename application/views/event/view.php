<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="text-center"><?= $event['event_title']?></h3>
        <div class="event_info"><span class="start">Start On: <?= $event['event_startdate']?> From <?= $event['event_starttime']?></span><span class="end">End On: <?= $event['event_startdate']?> At <?= $event['event_starttime']?></span></div>
        <div class="event_detail"><?= $event['event_detail']?></div>
        <?php if(!$this->session->userdata('logged_in')) : ?>
            <p class="alert alert-success text-center">Please login to know more about the event</p>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
        <?php if((date("Y-m-d") < $event['event_startdate'])): ?>
        <?php if($interested == true) : ?>
        <?php echo form_open('event/'.$event['event_id'].''); ?>
            <input name="slug" value="<?= $event['event_id']?>" type="hidden">
            <div class="btn_center">
            <button type="submit" class="btn btn-primary">Show Interest</button>
            </div>
        <?php echo form_close(); ?>
        <?php endif; ?>
        <?php if($interested == false) : ?>
        <p class="alert alert-success text-center">Already Clicked!!!</p>
        <?php endif; ?>
        <?php endif ?>
        <?php if((date("Y-m-d") >= $event['event_startdate'])): ?>
            <p class="alert alert-success text-center">Event has been ended or started</p>
        <?php endif ?>
        <?php endif; ?>  
    </div>
</div>