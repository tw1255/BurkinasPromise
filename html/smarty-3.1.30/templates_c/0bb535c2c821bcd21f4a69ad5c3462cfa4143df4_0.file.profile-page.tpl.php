<?php
/* Smarty version 3.1.30, created on 2018-03-29 01:43:20
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\profile-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abc44b87b47e2_99646531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb535c2c821bcd21f4a69ad5c3462cfa4143df4' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\profile-page.tpl',
      1 => 1522287798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/sponsor-navbar.tpl' => 1,
  ),
),false)) {
function content_5abc44b87b47e2_99646531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Burkina's Promise</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/sponsor-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-3 p-0">
          <h1 class="m-3">Profile Page</h1>
          <p class="border-bottom"></p>
          <div class="list-group">
            <a href="profile-page.php" class="list-group-item">Child 1</a>
            <a href="profile-page.php" class="list-group-item">Child 2</a>
            <a href="profile-page.php" class="list-group-item">Child 3</a>
            <a href="profile-page.php" class="list-group-item">Child 4</a>
            <a href="profile-page.php" class="list-group-item">Child 5</a>
            <a href="profile-page.php" class="list-group-item">Child 6</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">Child Name</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            </div>
          </div>
          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Child Information
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <hr>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Burkina's Promise 2018</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
