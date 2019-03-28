<?php
/* Smarty version 3.1.30, created on 2018-04-26 01:53:40
  from "/var/www/html/templates/new-sponsor-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae16964ac8f76_70688193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f5300444ce290b73dd0a3c337f712ade244f5c' => 
    array (
      0 => '/var/www/html/templates/new-sponsor-page.tpl',
      1 => 1524722016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ae16964ac8f76_70688193 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Burkina's Promise</title>
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
            <li class="breadcrumb-item active">New Sponsors</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>List of Sponsors in the last 20 days</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Current Sponsor?</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'sponsorData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsorData']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["first_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["last_name"];?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['sponsorData']->value['user_fk'] != null) {?>
                                    <td>Yes</td>
                                <?php } else { ?>
                                    <td>No</td>
                                <?php }?>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["address"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["city"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["state"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["zip_code"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["email"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["phone"];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Burkina's Promise 2018</small>
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
</div>
</body>

</html><?php }
}
