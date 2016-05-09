<?php /* Smarty version 3.1.27, created on 2016-05-09 20:15:07
         compiled from "/home/ubuntu/workspace/styles/templates/acciones/editar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9219969045730efcb2bbfc0_04084491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2fb3a7b12c3c0751283914725ed2a26171df35' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/acciones/editar.tpl',
      1 => 1462824904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9219969045730efcb2bbfc0_04084491',
  'variables' => 
  array (
    'nombre' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5730efcb2d93f8_48968618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5730efcb2d93f8_48968618')) {
function content_5730efcb2d93f8_48968618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9219969045730efcb2bbfc0_04084491';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container" style="margin-top: 30px;">
        <center>
            <form action="?view=nuevo" method="post" enctype="multipart/form-data" class="form-horizontal">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca el nombre del animal" required="" autofocus="" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"><br>
            </div>
            <label for="reino" class="col-sm-2 control-label">Reino</label>
            <div class="col-sm-10">
            <input type="text" name="reino" id="reino" class="form-control" placeholder="Introduzca el reino" required="" autofocus=""><br>
            </div>
            <label for="subreino" class="col-sm-2 control-label">Subreino</label>
            <div class="col-sm-10">
            <input type="text" name="subreino" id="subreino" class="form-control" placeholder="Introduzca el subreino" required="" autofocus=""><br>
            </div>
            <label for="filo" class="col-sm-2 control-label">Filo</label>
            <div class="col-sm-10">
            <input type="text" name="filo" id="filo" class="form-control" placeholder="Introduzca el filo" required="" autofocus=""><br>
            </div>
            <label for="subfilo" class="col-sm-2 control-label">Subfilo</label>
            <div class="col-sm-10">
            <input type="text" name="subfilo" id="subfilo" class="form-control" placeholder="Introduzca el subfilo" required="" autofocus=""><br>
            </div>
            <label for="clase" class="col-sm-2 control-label">Clase</label>
            <div class="col-sm-10">
            <input type="text" name="clase" id="clase" class="form-control" placeholder="Introduzca el clase" required="" autofocus=""><br>
            </div>
            <label for="orden" class="col-sm-2 control-label">Orden</label>
            <div class="col-sm-10">
            <input type="text" name="orden" id="orden" class="form-control" placeholder="Introduzca el orden" required="" autofocus=""><br>
            </div>
            <label for="familia" class="col-sm-2 control-label">Familia</label>
            <div class="col-sm-10">
            <input type="text" name="familia" id="familia" class="form-control" placeholder="Introduzca la familia" required="" autofocus=""><br>
            </div>
            <label for="genero" class="col-sm-2 control-label">Genero</label>
            <div class="col-sm-10">
            <input type="text" name="genero" id="genero" class="form-control" placeholder="Introduzca el genero" required="" autofocus=""><br>
            </div>
            <label for="especie" class="col-sm-2 control-label">Especie</label>
            <div class="col-sm-10">
            <input type="text" name="especie" id="especie" class="form-control" placeholder="Introduzca la especie" required="" autofocus=""><br>
            </div>
            <label for="imagen" class="col-sm-2 control-label">Imagen</label>
            <div class="col-sm-10">
            <img class="img-responsive img-rounded col-md-4" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
"/>
            <input type="file" name="imagen" id="imagen"><br>
            </div>
            <label for="imagen" class="col-sm-2 control-label"></label>
              <input class="btn btn-primary btn-block" type="submit" value="Enviar" />
</form>
        </center>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html>
<?php }
}
?>