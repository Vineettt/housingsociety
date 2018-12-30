<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/event">Event</a>
      </li>
      <li class="breadcrumb-item active">Participant</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Users</div>
      <div class="card-body">
          <h4 class="text-center">EVENT : <?= $eventDetail['event_title']?></h4>
        <div class="table-responsive">
          <table class="table table-bordered" id="participant" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>House Number</th>
                <th>Event Title</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>House Number</th>
                <th>Event Title</th>
              </tr>
            </tfoot>
            <tbody>
                <?php $i = 1?>
              <?php foreach($events as $event) : ?>
                <tr>
                    <td><?= $i?></td>
                    <td><?= $event['first_name']?> <?= $event['last_name']?></td>
                    <td><?= $event['house_number']?></td>
                    <td><?= $eventDetail['event_title']?></td>
                </tr>
                <?php $i++ ?>
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
