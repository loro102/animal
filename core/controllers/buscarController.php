<?php
/**
 * Created by PhpStorm.
 * User: loro102
 * Date: 29/11/2015
 * Time: 13:21
 */
if($_POST OR (isset($_SESSION['busqueda']) AND isset($_GET['pag']))){
    $template = new Smarty();
    //compruebo que el paginado existe y sea numerico y que sea superior a 1
    if (isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1) {
        $pagina = $_GET['pag'];
    } else {
        $pagina = 1;
    }
    //abro conexion a base de datos
    $db = new Conexion();
    //Establezco cuantas filas quiero mostrar
    $paginado = 10;
    //Algoritmo de paginado
    $inicio = ($pagina - 1) * $paginado;
    //Comprueba que exista algo en el post
    if (isset($_SESSION['busqueda']) and !isset($_POST['busqueda'])){
        $busqueda=$_SESSION['busqueda'];
    }else {
        $busqueda=$_POST['busqueda'];
    }
    $_SESSION['busqueda']=$busqueda;
    //$busqueda= isset($_SESSION['busqueda']) ? $_SESSION['busqueda'] : $_POST['busqueda'];

    //Hago consulta para contar las filas existentes en la base de datos
    $cantidad = $db->query("SELECT COUNT(*) FROM animal WHERE nombre LIKE '%$busqueda%';");
    //Hago consulta pero limitando las filas a mostrar y filtrado por nombre
    $sql = $db->query("SELECT * FROM animal WHERE nombre LIKE '%$busqueda%' ORDER BY nombre ASC LIMIT $inicio,$paginado;");
    //Obtengo los datos de la consulta
    $result = $db->recorrer($cantidad);
    $result = $result[0];
    //algoritmo para calcular las paginas que puedo mostrar
    $paginas = ceil($result / $paginado);
    //compruebo que exista alguna fila
    if ($db->rows($sql) > 0) {
        //Obtengo los datos de la base de datos y los guardo en un array
        while ($x = $db->recorrer($sql)) {
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
        //Mando los datos del array a la plantilla
        $template->assign('animales', $animal);
    }
    //libero consulta
    $db->liberar($sql,$cantidad);
    //cierro consulta
    $db->close();
    //Asigno el titulo de la plantilla
    $template->assign('titulo', 'Resultado de Búsqueda');
    //Asigno las paginas
    $template->assign('pags',$paginas);
    //muestro plantilla
    $template->display('home/index.tpl');
}else{
    header('location: ?view=index');
}
