<?php /* Smarty version 3.1.27, created on 2016-05-10 20:08:34
         compiled from "/home/ubuntu/workspace/styles/templates/overall/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86735826757323fc253caf7_14732148%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2725c6c6a4ced23019689af6b5f967cf479e414f' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/overall/nav.tpl',
      1 => 1462910857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86735826757323fc253caf7_14732148',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57323fc2593908_63776641',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57323fc2593908_63776641')) {
function content_57323fc2593908_63776641 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '86735826757323fc253caf7_14732148';
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Taxonomía Animal</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if ((isset($_GET['view']) && $_GET['view'] == 'index') || !isset($_GET['view'])) {?>
                <li class="active"><?php } else { ?>
                    <li><?php }?><a href="?view=index">Inicio <span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar un post..." name="busqueda" size="50" >
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['user'])) {?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['user'];?>
<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="?view=perfil&id=<?php echo $_SESSION['id'];?>
">Perfil</a></li>
                        <li><a href="?view=cuenta">Cuenta</a></li>
                        <li><a href="?view=logout">Logout</a></li>
                    </ul>
                </li>
                <?php } else { ?>
                    <?php if ((isset($_GET['view']) && $_GET['view'] == 'login')) {?>
                <li class="active">
                    <?php } else { ?>
                <li><?php }?><a href="?view=login">Login</a></li>
                <?php if ((isset($_GET['view']) && $_GET['view'] == 'reg')) {?>
                <li class="active">
                    <?php } else { ?>
                <li><?php }?><a href="?view=reg">Registrarme</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav><?php }
}
?>