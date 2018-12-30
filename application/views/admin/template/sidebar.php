
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>
<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
</div>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>

</nav>

<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/users">
        <i class="fas fa-users"></i>
        <span>Users</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/billing">
        <i class="fas fa-credit-card"></i>
        <span>Maintenance</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/daily_notification">
    <i class="fas fa-bell"></i>
        <span>Daily Notification</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/posts">
    <i class="fas fa-bell"></i>
        <span>Suggestion/Complaint</span></a>
  </li>
</ul>