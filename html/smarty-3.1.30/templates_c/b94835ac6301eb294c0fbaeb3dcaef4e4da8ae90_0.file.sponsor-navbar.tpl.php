<?php
/* Smarty version 3.1.30, created on 2018-03-07 05:38:09
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\sponsor-navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f7ac1d2d671_57270378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94835ac6301eb294c0fbaeb3dcaef4e4da8ae90' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\sponsor-navbar.tpl',
      1 => 1520400964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/logout-modal.tpl' => 1,
  ),
),false)) {
function content_5a9f7ac1d2d671_57270378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Burkina's Promise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav nav" style="margin-left: 100px;">
                <li class="nav-item active">
                    <a class="nav-link" href="sponsor-page.php" style="padding-left: 50px;">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Filler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Filler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Filler</a>
                </li>
                <li class="nav-item" style="margin-left: 250px;">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for...">
                            <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender("file:templates/logout-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;<?php }
}
