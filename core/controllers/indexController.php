<?php
//llamo al motor de plantillas
$template = new Smarty();
//asigno la variable titulo
$template->assign('titulo', 'Listado de animales');
//abro la conexion a la base de datos
$db=new Conexion();
//paginado
$pagina=(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag']>=1)? $_GET['pag']:1;
$paginado = 6;
$inicio = ($pagina - 1) * $paginado;

$cantidad=$db->query("SELECT COUNT(*) FROM animal;");
$result= $db->recorrer($cantidad);
$posts = $db->query("SELECT * FROM animal ORDER BY id DESC LIMIT $inicio,$paginado;");
$c_post = $result[0];
//hago la consulta para obtener todos los animales introducidos
$sql=$db->query("SELECT * FROM animal ");
if ($c_post >0 and $db->rows($posts)>0){
    while ($x=$db->recorrer($posts)){
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
    $paginas = ceil($c_post / $paginado);
    //asigno una variable para llevar los datos a la plantilla
    $template->assign(array(
        'pags'=>$paginas,
        'animales'=> $animal
        ));
}
//muestro la plantilla
$template->display('home/index.tpl');
//libero y cierro la consulta para liberar recursos
$db->liberar($sql);
$db->close();
?>