<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Suggestion or Complaint</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Posts</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="posts" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Post</th>
                <th>Category</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Post</th>
                <th>Category</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach($posts as $post) : ?>
                <tr>
                    <td><?= $post->post_id?></td>
                    <td><?= $post->first_name?> <?= $post->last_name?></td>
                    <td><?= $post->post_title?></td>
                    <td><?= $post->post_body?></td>
                    <td><?= $post->post_category?></td>
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
