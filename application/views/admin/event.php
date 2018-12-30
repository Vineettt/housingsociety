<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Event
    </ol>
    <div class="card mb-3">
      <div class="card-header">
      <i class="fas fa-plus-circle"></i>
      Create Event</div>
      <div class="card-body">
      <?php echo form_open_multipart('admin/event'); ?>
	      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" required placeholder="Title">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Event Detail</label>
              <textarea id="editor1" name="detail" class="form-control ckeditor" required placeholder="notification message"></textarea>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Duration of event</label>
                <p id="datepairExample">
                    <input type="text" name="startdate" class="date start" class="form-control" />
                    <input type="text" name="starttime" class="time start" class="form-control"  /> to
                    <input type="text" name="endtime" class="time end" class="form-control" />
                    <input type="text" name="enddate" class="date end" class="form-control" />
                </p>
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
          <table class="table table-bordered" id="events" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>End Date</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>End Date</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach($events as $event) : ?>
                <tr>
                    <td><?= $event->event_id?></td>
                    <td><?= $event->event_title?></td>
                    <td><?= $event->event_detail?></td>
                    <td><?= $event->event_startdate?></td>
                    <td><?= $event->event_starttime?></td>
                    <td><?= $event->event_endtime?></td>
                    <td><?= $event->event_enddate?></td>
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
