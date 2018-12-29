<?php if($billing_info == false):?>
	<h5 class="text-center alert alert-success">Your monthly payment has been done.</h5>
<?php endif; ?>
<?php if($billing_info == true):?>		
<?php echo validation_errors(); ?>

<?php echo form_open('billing'); ?>  
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
				<label>House Number</label>
				<input type="text" class="form-control" name="houseNum" value="<?= $_SESSION['housenumber']?>" placeholder="House Number" readonly>
			</div>
            <div class="form-group">
				<label>Card Number</label>
				<input type="text" class="form-control" required maxlength="16" name="cardnumber" placeholder="Card Number">
			</div>
			<div class="form-group">
				<label>Month</label>
				<input type="email" class="form-control" value="<?= date('m')?>" name="month" placeholder="Month" readonly>
			</div>
			<div class="form-group">
				<label>Year</label>
				<input type="text" class="form-control" value="<?= date('Y')?>" name="year" placeholder="Year" readonly>
			</div>
            <div class="form-group">
				<label>CCV</label>
				<input type="text" class="form-control" required maxlength="3" name="ccv" placeholder="CCV">
			</div>
            <div class="form-group">
				<label>Amount</label>
				<input type="text" class="form-control" name="amount" placeholder="Amount">
			</div>
			    <button type="submit" class="btn btn-primary btn-block">Submit</button>
		    </div>
	    </div>	
    <?php echo form_close(); ?>
<?php endif; ?>
