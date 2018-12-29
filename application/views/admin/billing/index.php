<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Payment</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Billing</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="billing" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>House Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Month</th>
                <th>Year</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                 <th>ID</th>
                <th>House Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Month</th>
                <th>Year</th>
                <th>Amount</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach($billings as $billing) : ?>
                <tr>
                    <td><?= $billing->billing_id?></td>
                    <td><?= $billing->house_number?></td>
                    <td><?= $billing->first_name?></td>
                    <td><?= $billing->last_name?></td>
                    <td><?= $billing->month?></td>
                    <td><?= $billing->year?></td>
                    <td><?= $billing->amount?></td>
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
