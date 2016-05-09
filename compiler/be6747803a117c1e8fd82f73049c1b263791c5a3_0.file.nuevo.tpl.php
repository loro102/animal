<?php /* Smarty version 3.1.27, created on 2016-05-09 00:26:36
         compiled from "/home/ubuntu/workspace/styles/templates/acciones/nuevo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1509539963572fd93c3218c8_17982970%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6747803a117c1e8fd82f73049c1b263791c5a3' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/acciones/nuevo.tpl',
      1 => 1462753512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1509539963572fd93c3218c8_17982970',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572fd93c34c0b5_89380161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572fd93c34c0b5_89380161')) {
function content_572fd93c34c0b5_89380161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1509539963572fd93c3218c8_17982970';
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
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca el nombre del animal" required="" autofocus=""><br>
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
            <input type="file" name="imagen" id="imagen"><br>
            </div>
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