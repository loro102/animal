<?php /* Smarty version 3.1.27, created on 2016-05-13 19:23:52
         compiled from "/home/ubuntu/workspace/styles/templates/overall/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1002247291573629c83ed5e8_68050830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2725c6c6a4ced23019689af6b5f967cf479e414f' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/overall/nav.tpl',
      1 => 1463167163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002247291573629c83ed5e8_68050830',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573629c841b2b9_20621146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573629c841b2b9_20621146')) {
function content_573629c841b2b9_20621146 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1002247291573629c83ed5e8_68050830';
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
                    <?php if ((isset($_GET['view']) && $_GET['view'] == 'nuevo') || !isset($_GET['view'])) {?>
                <li class="active"><?php } else { ?>
                    <li><?php }?><a href="?view=nuevo">nuevo <span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar un animal..." name="busqueda" size="50" >
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
</nav><?php }
}
?>