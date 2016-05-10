<?php
/**
 * Created by PhpStorm.
 * User: loro102
 * Date: 29/11/2015
 * Time: 13:21
 */
if($_POST OR (isset($_SESSION['busqueda']) AND isset($_GET['pag']))){
    $template = new Smarty();
    //$pagina=(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag']>=1)? $_GET['pag']:1;
    if (isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1) {
        $pagina = $_GET['pag'];
    } else {
        $pagina = 1;
    }

    $db = new Conexion();
    $paginado = 10;
    $inicio = ($pagina - 1) * $paginado;

    if (isset($_SESSION['busqueda']) and !isset($_POST['busqueda'])){
        $busqueda=$_SESSION['busqueda'];
    }else {
        $busqueda=$_POST['busqueda'];
    }
    $_SESSION['busqueda']=$busqueda;
    //$busqueda= isset($_SESSION['busqueda']) ? $_SESSION['busqueda'] : $_POST['busqueda'];


    $cantidad = $db->query("SELECT COUNT(*) FROM animal WHERE nombre LIKE '%$busqueda%';");
    $sql = $db->query("SELECT * FROM animal WHERE nombre LIKE '%$busqueda%' ORDER BY nombre DESC LIMIT $inicio,$paginado;");

    $result = $db->recorrer($cantidad);
    $result = $result[0];

    $paginas = ceil($result / $paginado);

    if ($db->rows($sql) > 0) {

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
        $template->assign('animales', $animal);
    }
    $db->liberar($sql);
    $db->close();
    $template->assign('titulo', 'Resultado de Búsqueda');
    $template->assign('pags',$paginas);
    $template->display('home/index.tpl');
}else{
    header('location: ?view=index');
}
