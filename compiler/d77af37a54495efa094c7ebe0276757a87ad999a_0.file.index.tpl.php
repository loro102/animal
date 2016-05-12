<?php /* Smarty version 3.1.27, created on 2016-05-11 19:56:27
         compiled from "/home/ubuntu/workspace/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:151656756857338e6b8300b9_68113794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77af37a54495efa094c7ebe0276757a87ad999a' => 
    array (
      0 => '/home/ubuntu/workspace/styles/templates/home/index.tpl',
      1 => 1462996586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151656756857338e6b8300b9_68113794',
  'variables' => 
  array (
    'titulo' => 0,
    'animales' => 0,
    'animal' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57338e6b987955_26250410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57338e6b987955_26250410')) {
function content_57338e6b987955_26250410 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '151656756857338e6b8300b9_68113794';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container-fluid">
        <div class="row">
            <div class="main">
                <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
                <div>
                    <?php if (isset($_GET['sucess'])) {?> <?php if ($_GET['sucess'] == 1) {?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        El registro se ha creado correctamente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }
if ($_GET['sucess'] == 2) {?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        El registro se ha modificado correctamente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }
if ($_GET['sucess'] == 3) {?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        El registro se ha borrado correctamente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }?> <?php }?> <?php if (isset($_GET['error'])) {?> <?php if ($_GET['error'] == 1) {?>
                    <div class="alert alert-danger" role="alert">El registro solicitado no existe
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php }?> <?php if ($_GET['error'] == 2) {?>
                    <div class="alert alert-danger" role="alert">El archivo no es correcto, asegurese que sea una imagen con las siguientes extensiones jpg, png, gif, jpeg
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php }?> 
                    <?php if ($_GET['error'] == 3) {?>
                    <div class="alert alert-danger" role="alert">El registro no existe,he grabado tu ip asi que no lo intentes mas
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php }
}?>
                </div>
                <div class="container col-sm-12">
                    <div class="container-fluid col-sm-12 ">
                        <?php if (isset($_smarty_tpl->tpl_vars['animales']->value)) {?> <?php
$_from = $_smarty_tpl->tpl_vars['animales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['animal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['animal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
$_smarty_tpl->tpl_vars['animal']->_loop = true;
$foreach_animal_Sav = $_smarty_tpl->tpl_vars['animal'];
?>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <!-- Buton para abrir ventana -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrar">
                                       &times;
                                    </button>
                                    <a href="?view=editar&id=<?php echo $_smarty_tpl->tpl_vars['animal']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['animal']->value['nombre'];?>
</a>
                                    

                                    <!-- ventana -->
                                    <div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="borrar">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-primary" id="myModalLabel">¿Estas seguro de querer borrar?</h4>
                                                </div>
                                                <div class="modal-body text-primary">
                                                    Si esta seguro de querer borrar el registro pulse en continuar, en caso contrario cierre esta ventana
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="?view=borrar&id=<?php echo $_smarty_tpl->tpl_vars['animal']->value['id'];?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['animal']->value['id'];?>
">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                        <input class="btn btn-primary" type="submit" value="Continuar"/>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-body">
                                    <div class="container col-md-6">
                                        <div>Reino:<?php echo $_smarty_tpl->tpl_vars['animal']->value['reino'];?>
</div>
                                        <div>Subreino:<?php echo $_smarty_tpl->tpl_vars['animal']->value['subreino'];?>
</div>
                                        <div>Filo:<?php echo $_smarty_tpl->tpl_vars['animal']->value['filo'];?>
</div>
                                        <div>Subfilo:<?php echo $_smarty_tpl->tpl_vars['animal']->value['subfilo'];?>
</div>
                                        <div>Clase:<?php echo $_smarty_tpl->tpl_vars['animal']->value['clase'];?>
</div>
                                        <div>Orden:<?php echo $_smarty_tpl->tpl_vars['animal']->value['orden'];?>
</div>
                                        <div>Familia:<?php echo $_smarty_tpl->tpl_vars['animal']->value['familia'];?>
</div>
                                        <div>Género:<?php echo $_smarty_tpl->tpl_vars['animal']->value['genero'];?>
</div>
                                        <div>Especie:<?php echo $_smarty_tpl->tpl_vars['animal']->value['especie'];?>
</div>
                                    </div>
                                    <img class="img-responsive col-md-6" src="<?php echo $_smarty_tpl->tpl_vars['animal']->value['imagen'];?>
" />
                                </div>
                            </div>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['animal'] = $foreach_animal_Sav;
}
?> <?php } else { ?>
                        <h2>Sin animales que mostrar</h2> <?php }?>
                    </div>
                </div>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['animal']->value)) {?>
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <?php if (!isset($_GET['pag'])) {?>
                <a type="button" class="btn btn-default disabled" href="#">Anterior</a> <?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?> <?php if (isset($_GET['type'])) {?>
                <a type="button" class="btn btn-primary" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=2">Siguiente</a> <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                <a type="button" class="btn btn-primary" href="?view=buscar&pag=2">Siguiente</a> <?php } else { ?>
                <a type="button" class="btn btn-primary" href="?view=index&pag=2">Siguiente</a> <?php }?> <?php } else { ?>
                <a type="button" class="btn btn-default disabled" href="#">Siguiente</a> <?php }?> <?php } else { ?> <?php if ($_GET['pag'] <= 1) {?> <a type="button" class="btn btn-default disabled" href="#">Anterior</a>
                    <?php } else { ?> <?php if (isset($_GET['type'])) {?>
                    <a type="button" class="btn btn-primary" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a> <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                    <a type="button" class="btn btn-primary" href="?view=buscar&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a> <?php } else { ?>
                    <a type="button" class="btn btn-primary" href="?view=index&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a> <?php }?> <?php }?> <?php if ($_smarty_tpl->tpl_vars['pags']->value > 1 && $_GET['pag'] >= 1 && $_GET['pag'] < $_smarty_tpl->tpl_vars['pags']->value) {?> <?php if (isset($_GET['type'])) {?> <a type="button" class="btn btn-primary" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a>
                        <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                        <a type="button" class="btn btn-primary" href="?view=buscar&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a> <?php } else { ?>
                        <a type="button" class="btn btn-primary" href="?view=index&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a> <?php }?> <?php } else { ?>
                        <a type="button" class="btn btn-default disabled" href="#">Siguiente</a> <?php }?> <?php }?>
            </div>
            <?php } else { ?> <?php }?>
        </div>
    </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html><?php }
}
?>