<?php
/* Smarty version 3.1.30, created on 2018-03-22 13:51:39
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\presentation-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab3b4eb8bc3b4_88037825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94eaee614d4cc7fefbe0302da968c71e5c13276' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\presentation-page.tpl',
      1 => 1521726695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ab3b4eb8bc3b4_88037825 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link href="css/presentation-page.css" rel="stylesheet" type="text/css">

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
            <li class="breadcrumb-item active">Presentation</li>
        </ol>
        <!-- Slideshow-->

        <div class="container mb-5 align-content-center">
            <h2>Child Presentation</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner mb-5">

                    <div class="item active">
                        <img src="images/child-example1.jpg" alt="Child 1" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Child 1</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/child-example2.jpg" alt="Child 2" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Child 2</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/child-example3.jpg" alt="Child 3" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Child 3</h3>
                            <p></p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer position-fixed bg-dark">
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
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="index.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
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

</html>
<?php }
}
