<?php
//compruebo que exista una id,que sea numérico y que sea mayor o igual a 1
if ($_POST) {
    //Si existe post o sea si el formulario envia datos
    //llamo al motor de plantillas
        $template = new smarty();
    if (isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1) {
        //llamo al archivo donde tengo las clases
        require('core/models/class.animales.php');
        //llamo la clase animales
        $modificar = new animales();
        //llamo a la funcion de la clase
        $modificar->BorrarAnimal();
    } 
} else {
        //si no existe id que me lleve a la pagina principal
        header('location:?view=index');
}
?>