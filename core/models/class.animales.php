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
    
    public function NuevoAnimal(){
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
            $db= new Conexion();
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
            $sql=$db->query("INSERT INTO animal (nombre,reino,subreino,filo,subfilo,clase,orden,familia,genero,especie) VALUES ('$this->nombre','$this->reino','$this->subreino','$this->filo','$this->subfilo','$this->clase','$this->orden','$this->familia','$this->genero','$this->especie');");
            $id= mysqli_insert_id($db);
            if ($_FILES['imagen']['name'] != '') {
                $ext = end(explode('.', $_FILES['imagen']['name']));
                $extensiones = array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'PNG', 'GIF', 'JPEG');
                if (!in_array($ext, $extensiones)) {
                    header('location: ?view=nuevo&error=2');
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

            $db->liberar($sql,$sql2);
            $db->close();
            header('location: ?view=index&sucess=1');
        }else{
            throw new exception('Error: Datos vacios.');
            header('location: ?view=nuevo&error=1');
        }
    }
    
    
    public function EditarAnimal(){
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
//<<<<<<< Updated upstream
            if (isset($_POST['id'])) {
                $db= new Conexion();
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
                    $sql=$db->query("UPDATE animal SET nombre='$this->nombre',reino='$this->reino',subreino='$this->subreino',filo='$this->filo',subfilo='$this->subfilo',clase='$this->clase',orden='$this->orden',familia='$this->familia',genero='$this->genero',especie='$this->especie' WHERE id='$this->id'");
                    $id=$this->id;
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
                    $db->liberar($sql,$sql2);
                    $db->close();
                    header('location: ?view=index&sucess=2');
                    exit;
            }
            else{
                header('location: ?view=editar&$id='.$this->id.'&error=1');
            }
    
        }
    else{
        header('location: ?view=editar$id='.$this->id.'&error=1');
    }
    }
    
    
    public function BorrarAnimal(){
        if(!empty($_POST['id'])){
            if (isset($_POST['id'])) {
                $db= new Conexion();
                $this->id = $_POST['id'];
                $sql = $db->query("SELECT imagen FROM animal WHERE id='$this->id'");
                $resultado = $db->recorrer($sql);
                $ruta=$resultado['imagen'];
                unlink($ruta);
                $sql1=$db->query("DELETE FROM animal WHERE id='$this->id'");
                $db->liberar($sql,$sql2);
                $db->close();
                header('location: ?view=index&sucess=3');
                exit;
            }
            else{
                header('location: ?view=index&error=1');
            }
        }else{
            header('location: ?view=editar&$id='.$this->id.'&error=3');
        }
    }
}