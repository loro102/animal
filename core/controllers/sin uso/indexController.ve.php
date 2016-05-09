<?php
$template = new Smarty();
$template->assign('titulo', 'Listado de animales');
$db=new Conexion();
//Muestra todos los animales introducidos
$sql=$db->query("SELECT * FROM animal ");
//Preparo todas las tablas para no tener que obtener cada elemento de la taxonomia.
//Realmente obtengo los datos 1 vez y los guardo para no acceder otra vez a la base de datos.
if ($db->rows($sql)>0){
    //Lista de consultas necesarias para enlazar a los elementos
    $psql = "SELECT filo FROM filo WHERE id=?";
    $psql1 = "SELECT subfilo FROM subfilo WHERE id=?";
    $psql2 = "SELECT reino FROM reino WHERE id=?";
    $psql3 = "SELECT subreino FROM subreino WHERE id=?";
    $psql4 = "SELECT clase FROM clase WHERE id=?";
    $psql5 = "SELECT orden FROM orden WHERE id=?";
    $psql6 = "SELECT familia FROM familia WHERE id=?";
    $psql7 = "SELECT genero FROM genero WHERE id=?";
    $psql8 = "SELECT especie FROM especie WHERE id=?";
    //llamo a la tabla filo y la preparo
    $p = $db->prepare($psql);
    $p->bind_param('i',$id_filo);
    //llamo a la tabla subfilo y la preparo
    $p1 = $db->prepare($psql1);
    $p1->bind_param('i',$id_subfilo);
    //llamo a la tabla reino y la preparo
    $p2 = $db->prepare($psql2);
    $p2->bind_param('i',$id_reino);
    //llamo a la tabla subreino y la preparo
    $p3 = $db->prepare($psql3);
    $p3->bind_param('i',$id_subreino);
    //llamo a la tabla clase y la preparo
    $p4 = $db->prepare($psql4);
    $p4->bind_param('i',$id_clase);
    //llamo a la tabla orden y la preparo
    $p5 = $db->prepare($psql5);
    $p5->bind_param('i',$id_orden);
    //llamo a la tabla familia y la preparo
    $p6 = $db->prepare($psql6);
    $p6->bind_param('i',$id_familia);
    //llamo a la tabla genero y la preparo
    $p7 = $db->prepare($psql7);
    $p7->bind_param('i',$id_genero);
    //llamo a la tabla especie y la preparo
    $p8 = $db->prepare($psql8);
    $p8->bind_param('i',$id_especie);
    while ($x=$db->recorrer($sql)){
        //obtengo las id para poder obtener el nombre del elemento
        $id_filo = $x['filo'];
        $id_subfilo = $x['subfilo'];
        $id_reino = $x['reino'];
        $id_subreino = $x['subreino'];
        $id_clase = $x['clase'];
        $id_orden = $x['orden'];
        $id_familia = $x['familia'];
        $id_genero = $x['genero'];
        $id_especie = $x['especie'];
        //Cargo la consulta en caso de que ya este almacenada la busco y devuelvo el valor
        //consulta de filo
        $p->execute();
        $p->store_result();
        $p->bind_result($filo);
        $p->fetch();
        //consulta de subfilo
        $p1->execute();
        $p1->store_result();
        $p1->bind_result($subfilo);
        $p1->fetch();
        //consulta de reino
        $p2->execute();
        $p2->store_result();
        $p2->bind_result($reino);
        $p2->fetch();
        //consulta de subreino
        $p3->execute();
        $p3->store_result();
        $p3->bind_result($subreino);
        $p3->fetch();
        //consulta de clase
        $p4->execute();
        $p4->store_result();
        $p4->bind_result($clase);
        $p4->fetch();
        //consulta de orden
        $p5->execute();
        $p5->store_result();
        $p5->bind_result($orden);
        $p5->fetch();
        //consulta de familia
        $p6->execute();
        $p6->store_result();
        $p6->bind_result($familia);
        $p6->fetch();
        //consulta de genero
        $p7->execute();
        $p7->store_result();
        $p7->bind_result($genero);
        $p7->fetch();
        //consulta de especie
        $p8->execute();
        $p8->store_result();
        $p8->bind_result($especie);
        $p8->fetch();
        
        $animal[]=array(
            'id'=>$x['id'],
            'nombre'=>$x['nombre'],
            'filo'=>$filo,
            'subfilo'=>$subfilo,
            'reino'=>$reino,
            'subreino'=>$subreino,
            'clase'=>$clase,
            'orden'=>$orden,
            'familia'=>$familia,
            'genero'=>$genero,
            'especie'=>$especie,
            'imagen'=>$x['imagen'],
            'tipimagen'=>$x['tipimagen'],

        );
    }
    $template->assign('animales', $animal);
    $p->free_result();
    $p1->free_result();
    $p2->free_result();
    $p3->free_result();
    $p4->free_result();
    $p5->free_result();
    $p6->free_result();
    $p7->free_result();
    $p8->free_result();
}
$template->display('home/index.tpl');
$db->liberar($sql);
$db->close();
?>