<?php
/* Smarty version 3.1.30, created on 2018-05-08 21:28:21
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\admin-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af21675430891_59015823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '103a4cc876920f0978be23888f989093c15c9f3f' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\admin-page.tpl',
      1 => 1525409046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5af21675430891_59015823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Page</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this templates-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this templates-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php $_smarty_tpl->_subTemplateRender("file:templates/admin-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">New Messages</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="admin-message-page.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">Add/Update Requests</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="add-request-admin.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">New Notifications</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="notification-page-admin.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">New Sponsors</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="new-sponsor-page.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer bg-dark">
        <div class="container">
          <div class="text-center">
            <small class="text-white">Copyright © Burkina's Promise 2018</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>

      <!-- Bootstrap core JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
      <!-- Core plugin JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
      <!-- Page level plugin JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
      <!-- Custom scripts for all pages-->
      <?php echo '<script'; ?>
 src="js/sb-admin.min.js"><?php echo '</script'; ?>
>
      <!-- Custom scripts for this page-->
      <?php echo '<script'; ?>
 src="js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/sb-admin-charts.min.js"><?php echo '</script'; ?>
>
    </div>
</body>

</html><?php }
}
