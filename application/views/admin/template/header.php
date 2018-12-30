<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title?> | HousingSociety</title>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css" rel="stylesheet">
    </head>
    <body id="page-top">   
        <div class="container">
            <div class="row width">   
                <?php if($this->session->flashdata('daily_notification')): ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('daily_notification').'</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('admin_loggedin')): ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_loggedin').'</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('user_loggedout')): ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('adminlogin_failed')): ?>
                    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('adminlogin_failed').'</p>'; ?>
                <?php endif; ?>
            </div>
        </div>