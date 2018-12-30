<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | Housing Society</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header hidden-xs">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">HousingSociety</a>
            </div>
            <div class="topnav hidden-lg hidden-md- hidden-sm">
                <a href="<?php echo base_url(); ?>">HousingSociety</a>
                <div id="myLinks">
                    <a href="<?php echo base_url(); ?>">Home</a>
                    <a href="<?php echo base_url(); ?>about">About</a>
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                    <a href="<?php echo base_url(); ?>users/login">Login</a>
                    <a href="<?php echo base_url(); ?>users/register">Register</a>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>
                    <a href="<?php echo base_url(); ?>profile">Profile</a>
                    <a href="<?php echo base_url(); ?>users/logout">Logout</a>
                    <?php endif; ?>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container">
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('profile_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('profile_updated').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('billing_successfull')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('billing_successfull').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('post_submitted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_submitted').'</p>'; ?>
    <?php endif; ?>