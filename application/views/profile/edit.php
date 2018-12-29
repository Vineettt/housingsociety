<?php echo validation_errors(); ?>

<?php echo form_open('profile/edit'); ?>  
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="fname" placeholder="First Name" value="<?= $profile_detail['first_name']?>">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?= $profile_detail['last_name']?>">
			</div>
            <div class="form-group">
				<label>Phone Number</label>
				<input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?= $profile_detail['phone_number']?>">
			</div>
            <div class="form-group">
				<label>House Number</label>
				<input type="text" class="form-control" name="houseNum" placeholder="House Number" value="<?= $profile_detail['house_number']?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email" value="<?= $profile_detail['email']?>">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username" value="<?= $profile_detail['username']?>" readonly>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>	
<?php echo form_close(); ?>