<?php
/* Smarty version 3.1.30, created on 2018-05-08 21:28:32
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\add-request-admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af21680e89d52_06578136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b09b54f1d11de63da32919964c6ae196e6ac3f5' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\add-request-admin.tpl',
      1 => 1525792097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5af21680e89d52_06578136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Requests</title>
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
        <?php if ($_smarty_tpl->tpl_vars['success']->value === true) {?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Child Info has been Accepted.
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['success']->value === false) {?>
            <div class="alert alert-dark alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Message was sent to Accedes.
            </div>
        <?php }?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Recent Add Requests</li>
        </ol>

        <?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"><?php echo '</script'; ?>
>
        <div style="padding: 20px 20% 0 20%;">
            <div class="chat_list">
                <ul class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted"><?php echo $_smarty_tpl->tpl_vars['row']->value['record_date'];?>
</small>
                        <div>
                            <small class="list-group-item-heading text-muted text-primary"></small>
                            <p class="list-group-item-text">
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 3) {?>
                                    An accedes user has requested that <?php echo $_smarty_tpl->tpl_vars['row']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['last_name'];?>
's information be updated.
                                <?php } else { ?>
                                     An accedes user has requested a child to be added to the database.
                                <?php }?>
                            </p>
                        </div>
                        <form method="get" action="request-details.php">
                            <input id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
" hidden>
                            <input id="child_id" name="child_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['child_id'];?>
" hidden>
                            <input id="record_date" name="record_date" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['record_date'];?>
" hidden>
                            <input type="submit" class="btn btn-unique" value="Details">
                        </form>
                        
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
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
