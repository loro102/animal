<?php
//llamo al motor de plantillas
$template = new Smarty();
//asigno la variable titulo
$template->assign('titulo', 'Listado de animales');
//abro la conexion a la base de datos
$db=new Conexion();
//Compruebo que el paginado exista y es numerico y mayor o igual a 1
$pagina=(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag']>=1)? $_GET['pag']:1;
//Establezco cuantos quiero mostrar en cada pagina
$paginado = 6;
//algoritmo de paginado
$inicio = ($pagina - 1) * $paginado;
//Cuento las filas existentes en la tabla
$cantidad=$db->query("SELECT COUNT(*) FROM animal;");
//Obtengo la cantidad de filas
$result= $db->recorrer($cantidad);
//Obtengo los datos pero limitando las filas
//Hago consulta para obtener datos
$sql = $db->query("SELECT * FROM animal ORDER BY nombre ASC LIMIT $inicio,$paginado;");
//resultado de paginado
$c_sql = $result[0];
//hago la consulta para obtener todos los animales introducidos
//$sql=$db->query("SELECT * FROM animal");
if ($c_sql >0 and $db->rows($sql)>0){
    //obtengo datos y los guardo en un array
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
    //Calculo las paginas existentes
    $paginas = ceil($c_sql / $paginado);
    //asigno las paginas y el array de los datos
    $template->assign(array(
        'pags'=>$paginas,
        'animales'=> $animal
        ));
}
//muestro la plantilla
$template->display('home/index.tpl');
//libero y cierro la consulta para liberar recursos
$db->liberar($sql,$cantidad);
$db->close();
?>