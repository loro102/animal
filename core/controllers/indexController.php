<?php
//llamo al motor de plantillas
$template = new Smarty();
//asigno la variable titulo
$template->assign('titulo', 'Listado de animales');
//abro la conexion a la base de datos
$db=new Conexion();
//hago la consulta para obtener todos los animales introducidos
$sql=$db->query("SELECT * FROM animal");
if ($db->rows($sql)>0){
    while ($x=$db->recorrer($sql)){
        $animal[]=array(
            'id'=>$x['id'],
            'nombre'=>$x['nombre'],
            'filo'=>$x['filo'],
            'subfilo'=>$x['subfilo'],
            'reino'=>$x['reino'],
            'subreino'=>$x['subreino'],
            'clase'=>$x['clase'],
            'orden'=>$x['orden'],
            'familia'=>$x['familia'],
            'genero'=>$x['genero'],
            'especie'=>$x['especie'],
            'imagen'=>$x['imagen'],
        );
    }
    //asigno una variable para llevar los datos a la plantilla
    $template->assign('animales', $animal);
}
//muestro la plantilla
$template->display('home/index.tpl');
//libero y cierro la consulta para liberar recursos
$db->liberar($sql);
$db->close();
?>