<?php
//compruebo que exista una id,que sea numérico y que sea mayor o igual a 1
if (isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1) {
    //Si existe post o sea si el formulario envia datos
    //llamo al motor de plantillas
        $template = new smarty();
    if ($_POST) {
        //llamo al archivo donde tengo las clases
        require('core/models/class.animales.php');
        //llamo la clase animales
        $modificar = new animales();
        //llamo a la funcion de la clase
        $modificar->EditarAnimal();
    } else {
        //abro conexion con base de datos
        $db = new Conexion();
        //Guardo id en variable como integer
        $id = intval($_GET['id']);
        //realizo consulta por id
        $sql = $db->query("SELECT * FROM animal WHERE id='$id'");
        //compruebo que exista consulta
            if ($db->rows($sql) > 0) {
                //obtengo datos de consulta
                $animal = $db->recorrer($sql);
                //asigno variables para llevar los datos a la plantilla
                $template->assign(array(
                'id' => $animal['id'],
                'nombre' => $animal['nombre'],
                'filo' => $animal['filo'],
                'subfilo' => $animal['subfilo'],
                'reino' =>$animal['reino'],
                'subreino' => $animal['subreino'],
                'clase'=>$animal['clase'],
                'orden'=>$animal['orden'],
                'familia'=>$animal['familia'],
                'genero'=>$animal['genero'],
                'especie'=>$animal['especie'],
                'imagen'=>$animal['imagen'],
            ));
        //llamo a la plantilla del formulario
        $template->display('acciones/editar.tpl');
        }
    }
    
} else {
        //si no existe id que me lleve a la pagina principal
        header('location:?view=index');
}
?>