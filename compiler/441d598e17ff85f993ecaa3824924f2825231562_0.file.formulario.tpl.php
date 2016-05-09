<?php /* Smarty version 3.1.27, created on 2016-05-09 00:26:20
         compiled from "/home/ubuntu/workspace/styles/templates/posts/formulario.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:968355651572fd92c207ea4_40421155%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '441d598e17ff85f993ecaa3824924f2825231562' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/posts/formulario.tpl',
      1 => 1462736652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968355651572fd92c207ea4_40421155',
  'variables' => 
  array (
    'titulo' => 0,
    'nombre' => 0,
    'reino' => 0,
    'subreino' => 0,
    'filo' => 0,
    'subfilo' => 0,
    'clase' => 0,
    'orden' => 0,
    'familia' => 0,
    'genero' => 0,
    'especie' => 0,
    'image' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572fd92c2d4f77_15604723',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572fd92c2d4f77_15604723')) {
function content_572fd92c2d4f77_15604723 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '968355651572fd92c207ea4_40421155';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container" style="margin-top: 30px;">
        <center>
            <div id="_AJAX_">

            </div>
            <form action="?view=nuevo" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group" style="width:500px;">
                    <h2 class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" id="nombre" class="form-control" placeholder="Introduczca el nombre del animal" required="" autofocus="" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
                    </div>
                    <label for="reino" class="col-sm-2 control-label">Reino</label>
                    <div class="col-sm-10">
                        <input type="text" id="reino" class="form-control" placeholder="Introduzca el reino" required="" value="<?php echo $_smarty_tpl->tpl_vars['reino']->value;?>
">
                    </div>
                    <label for="subreino" class="col-sm-2 control-label">Subreino</label>
                    <div class="col-sm-10">
                        <input type="text" id="subreino" class="form-control" placeholder="Introduzca el subreino" required="" value="<?php echo $_smarty_tpl->tpl_vars['subreino']->value;?>
">
                    </div>
                    <label for="filo" class="col-sm-2 control-label">Filo</label>
                    <div class="col-sm-10">
                        <input type="text" id="filo" class="form-control" placeholder="Introduzca el filo" required="" value="<?php echo $_smarty_tpl->tpl_vars['filo']->value;?>
">
                    </div>
                    <label for="subfilo" class="col-sm-2 control-label">Subfilo</label>
                    <div class="col-sm-10">
                        <input type="text" id="subfilo" class="form-control" placeholder="Introduzca el subfilo" required="" value="<?php echo $_smarty_tpl->tpl_vars['subfilo']->value;?>
">
                    </div>
                    <label for="clase" class="col-sm-2 control-label">Clase</label>
                    <div class="col-sm-10">
                        <input type="text" id="clase" class="form-control" placeholder="Introduzca la clase" required="" value="<?php echo $_smarty_tpl->tpl_vars['clase']->value;?>
">
                    </div>
                    <label for="orden" class="col-sm-2 control-label">Orden</label>
                    <div class="col-sm-10">
                        <input type="text" id="orden" class="form-control" placeholder="Introduzca el orden" required="" value="<?php echo $_smarty_tpl->tpl_vars['orden']->value;?>
">
                    </div>
                    <label for="familia" class="col-sm-2 control-label">Familia</label>
                    <div class="col-sm-10">
                        <input type="text" id="familia" class="form-control" placeholder="Introduzca la familia" required="" value="<?php echo $_smarty_tpl->tpl_vars['familia']->value;?>
">
                    </div>
                    <label for="genero" class="col-sm-2 control-label">Género</label>
                    <div class="col-sm-10">
                        <input type="text" id="genero" class="form-control" placeholder="Introduzca el genero" required="" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
">
                    </div>
                    <label for="especie" class="col-sm-2 control-label">Especie</label>
                    <div class="col-sm-10">
                        <input type="text" id="especie" class="form-control" placeholder="Introduzca la especie" required="" value="<?php echo $_smarty_tpl->tpl_vars['especie']->value;?>
">
                    </div>
                    <br>
                    <div class="media-left media-bottom">
                        <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="150" height="150" />
                    </div>
                    <div class="media-body">
                        <label>Imagen del animal</label>
                        <input type="file" name="foto" id=imagen />
                        <input type="hidden" id="id" class="form-control" " value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    </div>

                    <br>
                    <input class="btn btn-primary btn-block" id="enviar" type="submit" value="Enviar" />
                </div>
            </form>
        </center>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html><?php }
}
?>