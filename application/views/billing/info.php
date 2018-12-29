<h2><?= $title ?></h2>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php if($billing_info == false):?>
			<h5 class="text-center alert alert-success">Your this month payment has been done.</h5>
		<?php endif; ?>
		<?php if($billing_info == true):?>		
			<h5 class="text-center alert alert-warning">Your this month payment is pending please click on the below button for payment.</h5>
			<div class="btn_center">
				<a type="submit" class="btn btn-warning" href="<?php echo base_url(); ?>billing">Payment Page</a>
			</div>
		<?php endif; ?>
    </div>
</div>
<?php foreach($billingDetails as $billingDetail) : ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="billing_date">Billing Date : <?= $billingDetail['billing_timestamp']?></div>
            <p class="padding"><strong><?= $billingDetail['month']?>/<?= $billingDetail['year']?></strong> payement is done by <?= $billingDetail['first_name']?> <?= $billingDetail['last_name']?> for house number <?= $billingDetail['house_number']?></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>