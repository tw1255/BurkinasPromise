<?php
/* Smarty version 3.1.30, created on 2018-04-13 14:27:48
  from "/var/www/html/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad0f6a4df1ca3_43632499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d80c9f5195a4b1349fd7984fb80fa80c14534' => 
    array (
      0 => '/var/www/html/templates/index.tpl',
      1 => 1523644062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad0f6a4df1ca3_43632499 (Smarty_Internal_Template $_smarty_tpl) {
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
  <!-- Custom styles for this templates-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<img class="mx-auto d-block" src="images/navlogo2.png" alt="Website Logo">
<div class="container">
  <div class="card card-login mx-auto mt-2">
    <div class="card-header">Burkina's Promise Login</div>
    <div class="card-body">
      <form method="POST" action="index.php">
        <div class="form-group">
          <label for="email">Email address</label>
          <input class="form-control" id="email" type="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" id="password" type="password" placeholder="Password" name="password">
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
          <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        <?php }?>
        <br>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox">Remember Password</label>
          </div>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Login"/>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="register.php">Register an Account</a>
        <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
</body>

</html>
<?php }
}
