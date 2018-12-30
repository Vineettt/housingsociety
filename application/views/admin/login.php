<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><?= $title?></div>
        <div class="card-body">
        <?php echo form_open('admin/login'); ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="user" class="form-control" placeholder="User Name" name="username" required="required" autofocus="autofocus">
                <label for="user">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block">Login</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>