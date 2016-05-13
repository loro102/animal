<?php

class animales
{
    private $nombre;
    private $filo;
    private $subfilo;
    private $reino;
    private $subreino;
    private $clase;
    private $orden;
    private $familia;
    private $genero;
    private $especie;
    
    //Funcion para crear un nuevo registro
    public function NuevoAnimal(){
        //Compruebo que el post no este vacio
        if(!empty($_POST['nombre'])
        and !empty($_POST['filo'])
        and !empty($_POST['subfilo'])
        and !empty($_POST['reino'])
        and !empty($_POST['subreino'])
        and !empty($_POST['clase'])
        and !empty($_POST['orden'])
        and !empty($_POST['familia'])
        and !empty($_POST['genero'])
        and !empty($_POST['especie'])
        ){
            //Abro conexion a la base de datos
            $db= new Conexion();
            //guardo post en variables
            $this->nombre = $db->real_escape_string($_POST['nombre']);
            $this->filo = $db->real_escape_string($_POST['filo']);
            $this->subfilo = $db->real_escape_string($_POST['subfilo']);
            $this->reino = $db->real_escape_string($_POST['reino']);
            $this->subreino = $db->real_escape_string($_POST['subreino']);
            $this->clase = $db->real_escape_string($_POST['clase']);
            $this->orden = $db->real_escape_string($_POST['orden']);
            $this->familia = $db->real_escape_string($_POST['familia']);
            $this->genero = $db->real_escape_string($_POST['genero']);
            $this->especie = $db->real_escape_string($_POST['especie']);
            //Hago consulta para crear un nuevo registro
            $sql=$db->query("INSERT INTO animal (nombre,reino,subreino,filo,subfilo,clase,orden,familia,genero,especie) VALUES ('$this->nombre','$this->reino','$this->subreino','$this->filo','$this->subfilo','$this->clase','$this->orden','$this->familia','$this->genero','$this->especie');");
            //Obtengo la ultima id introducida
            $id= mysqli_insert_id($db);
            //Vompruebo que haya imagen
            if ($_FILES['imagen']['name'] != '') {
                //obtengo la extension del archivo
                $ext = end(explode('.', $_FILES['imagen']['name']));
                //indico que formatos de imagen permito subir
                $extensiones = array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'PNG', 'GIF', 'JPEG');
                //Compruebo que la imagen pese menos de 2 megas
                if ($peso_archivo > 209700) {
                    //lanzo error por sobrepasar los 2 megas
                    header('location: ?view=nuevo&error=3');
                    exit;
                    }
                //Si la extension del archivo no coincide a los formatos que permito me salta error
                if (!in_array($ext, $extensiones)) {
                    header('location: ?view=nuevo&error=2');
                    exit;
                }
                //Si la imagen y la extension existe la elimino
                $ruta = 'uploads/avatar/' . $id.'.'.$ext;
                if(file_exists($ruta)){
                    unlink($ruta);
                }
                //Subo la imagen al servidor
                $ruta = 'uploads/avatar/' . $id .'.'. $ext;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                //introduzco la ruta de la imagen a la base de datos
                $sql2=$db->query("UPDATE animal SET imagen='$ruta' WHERE id='$id';");
            }
            
            //libero consultas
            $db->liberar($sql,$sql2);
            //cierro base de datos
            $db->close();
            //Redirecciona y lanza mensaje de confirmación
            header('location: ?view=index&sucess=1');
        }else{
            //Manda error de datos vacios
            throw new exception('Error: Datos vacios.');
            header('location: ?view=nuevo&error=1');
        }
    }
    
    //Funcion para editar registro
    public function EditarAnimal(){
        //compruebo que el post no este vacio
        if(!empty($_POST['nombre'])
        and !empty($_POST['filo'])
        and !empty($_POST['subfilo'])
        and !empty($_POST['reino'])
        and !empty($_POST['subreino'])
        and !empty($_POST['clase'])
        and !empty($_POST['orden'])
        and !empty($_POST['familia'])
        and !empty($_POST['genero'])
        and !empty($_POST['especie'])
        and !empty($_POST['id'])
        ){
            //Control de error para animales
            if (isset($_POST['id'])) {
                //abro conexion a base de datos
                $db= new Conexion();
                //guardo datos de post en variables
                $this->nombre = $db->real_escape_string($_POST['nombre']);
                $this->filo = $db->real_escape_string($_POST['filo']);
                $this->subfilo = $db->real_escape_string($_POST['subfilo']);
                $this->reino = $db->real_escape_string($_POST['reino']);
                $this->subreino = $db->real_escape_string($_POST['subreino']);
                $this->clase = $db->real_escape_string($_POST['clase']);
                $this->orden = $db->real_escape_string($_POST['orden']);
                $this->familia = $db->real_escape_string($_POST['familia']);
                $this->genero = $db->real_escape_string($_POST['genero']);
                $this->especie = $db->real_escape_string($_POST['especie']);
                $this->id = $_POST['id'];
                //Hago consulta para actualizar registro
                    $sql=$db->query("UPDATE animal SET nombre='$this->nombre',reino='$this->reino',subreino='$this->subreino',filo='$this->filo',subfilo='$this->subfilo',clase='$this->clase',orden='$this->orden',familia='$this->familia',genero='$this->genero',especie='$this->especie' WHERE id='$this->id'");
                    $id=$this->id;
                    //Hago toda la comprobacion de la imagen y me lo reemplaza
                    if ($_FILES['imagen']['name'] != '') {
                        $ext = end(explode('.', $_FILES['imagen']['name']));
                        $extensiones = array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'PNG', 'GIF', 'JPEG');
                        $peso_archivo = $HTTP_POST_FILES['imagen']['size'];
                        if ($peso_archivo > 209700) {
                            header('location: ?view=editar&id='.$this->id.'&error=3');
                            exit;
                        }
                        if (!in_array($ext, $extensiones)) {
                            header('location: ?view=editar&id='.$this->id.'&error=2');
                            exit;
                        }
                        $ruta = 'uploads/avatar/' . $id.'.'.$ext;
                        if(file_exists($ruta)){
                            unlink($ruta);
                        }
                        $ruta = 'uploads/avatar/' . $id .'.'. $ext;
                        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                        $sql2=$db->query("UPDATE animal SET imagen='$ruta' WHERE id='$id';");
                    }
                    //libero consultas y cierro conexion a base de datos
                    $db->liberar($sql,$sql2);
                    $db->close();
                    //Redirecciona y manda mensaje de confirmacion
                    header('location: ?view=index&sucess=2');
                    exit;
            }
            else{
                //manda error de no existe registro
                header('location: ?view=editar&$id='.$this->id.'&error=1');
            }
    
        }
    else{
        //manda error de no existe registro
        header('location: ?view=editar$id='.$this->id.'&error=1');
    }
    }
    
    //Funcion para borrar registro
    public function BorrarAnimal(){
        //compruebo que el post no este vacio
        if(!empty($_POST['id'])){
            if (isset($_POST['id'])) {
                //abro conexion a base de datos
                $db= new Conexion();
                //guardo post en variable
                $this->id = $_POST['id'];
                //hago consulta para obtener ruta de imagen
                $sql = $db->query("SELECT imagen FROM animal WHERE id='$this->id'");
                //recorro la consulta
                $resultado = $db->recorrer($sql);
                //guardo consulta en variable
                $ruta=$resultado['imagen'];
                //elimino la imagen de la ruta
                unlink($ruta);
                //hago consulta para borrar registro
                $sql1=$db->query("DELETE FROM animal WHERE id='$this->id'");
                //libero consultas
                $db->liberar($sql,$sql2);
                //cierro conexion a base de datos
                $db->close();
                //Redirecciona y mando mensaje de confirmacion
                header('location: ?view=index&sucess=3');
                exit;
            }
            else{
                //mando mensaje de no existe registro
                header('location: ?view=index&error=1');
            }
        }else{
            //mando error de no existencia
            header('location: ?view=index&error=3');
        }
    }
}