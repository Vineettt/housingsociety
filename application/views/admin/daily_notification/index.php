<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Payment</li>
    </ol>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Create Daily Notification</div>
      <div class="card-body">
      <?php echo form_open_multipart('admin/daily_notification'); ?>
	      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" required placeholder="Title">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Notification Message</label>
              <textarea id="editor1" name="message" class="form-control" required placeholder="notification message"></textarea>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <div class="form-group">
              <label>Date</label>
              <input type="date" name="date" class="form-control" placeholder="Pick Date" required>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      <?php echo form_close(); ?>
      </div>
      <div class="card-footer small text-muted">Updated <?=  date("l")?> at <?= date("h:ia")?></div>
    </div>
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Daily Notification</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="billing" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Notification Message</th>
                <th>Date</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Notification Message</th>
                <th>Date</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach($daily_notifications as $notification) : ?>
                <tr>
                    <td><?= $notification->dn_id?></td>
                    <td><?= $notification->dn_title?></td>
                    <td><?= $notification->dn_message?></td>
                    <td><?= $notification->dn_date?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated <?=  date("l")?> at <?= date("h:ia")?></div>
    </div>

  </div>
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © HousingSocirty 2018</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
