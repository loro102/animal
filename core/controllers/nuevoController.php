<?php
require('core/models/class.animales.php');
if ($_POST) {

        $cuentas = new animales();
        $cuentas->NuevoAnimal();

    } else {
        $template = new smarty();
        $template->display('acciones/nuevo.tpl');
    }
?>
