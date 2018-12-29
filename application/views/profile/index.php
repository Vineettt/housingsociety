<div class="row">
	<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
		<h1 class="text-center"><?= $title; ?></h1>
		<div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control" placeholder="<?= $profile_detail['first_name']?>" readonly>
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" class="form-control" placeholder="<?= $profile_detail['last_name']?>" readonly>
		</div>
        <div class="form-group">
			<label>Phone Number</label>
			<input type="tel" class="form-control" placeholder="<?= $profile_detail['phone_number']?>" readonly>
		</div>
        <div class="form-group">
			<label>House Number</label>
			<input type="num" class="form-control"  placeholder="<?= $profile_detail['house_number']?>" readonly>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" placeholder="<?= $profile_detail['email']?>" readonly>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" placeholder="<?= $profile_detail['username']?>"readonly>
		</div>
		<a type="submit" class="btn btn-primary btn-block" href="<?php echo base_url(); ?>profile/edit">Edit</a>
	</div>
</div>	
<div class="line"></div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3 class="text-center"><?= $subtopic?></h3>
		<?php if($billing_info == false):?>
			<h5 class="text-center alert alert-success">Your this month payment has been done.</h5>
		<?php endif; ?>
		<?php if($billing_info == true):?>		
			<h5 class="text-center alert alert-warning">Your this month payment is pending please click on the below button for payment.</h5>
			<div class="btn_center">
				<a type="submit" class="btn btn-warning" href="<?php echo base_url(); ?>billing">Payment Page</a>
			</div>
		<?php endif; ?>
		<div class="btn_center">
			<h5 class="text-center">Click on below button for all the payment records</h5>
			<a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>billing/info">Billing Information</a>
		</div>
	</div>
</div>