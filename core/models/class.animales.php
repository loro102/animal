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
    private $imagen;
    
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
                    header('location: ?view=cuenta&error=6');
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
            header('location: ?view=nuevo&success=1');
        }else{
            throw new exception('Error: Datos vacios.');
            header('location: ?view=index');
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
                $id = $db->real_escape_string($_POST['id']);
                $sql = $db->query("SELECT FROM animal WHERE id='$this->id';");
                if ($db->rows($sql) > 0) {
                    $sql2=$db->query("UPDATE animal SET nombre='$this->nombre',reino='$this->reino',subreino='$this->subreino',filo='$this->filo',subfilo='$this->subfilo',clase='$this->clase',orden='$this->orden',familia='$this->familia',genero='$this->genero',especie='$this->especie' WHERE id='$this->id'");
                    $id=$this->id;
                    if ($_FILES['imagen']['name'] != '') {
                        $ext = end(explode('.', $_FILES['imagen']['name']));
                        $extensiones = array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'PNG', 'GIF', 'JPEG');
                        if (!in_array($ext, $extensiones)) {
                            header('location: ?view=cuenta&error=6');
                            exit;
                        }
                        $ruta = 'uploads/avatar/' . $id.'.'.$ext;
                        if(file_exists($ruta)){
                            unlink($ruta);
                        }
                        $ruta = 'uploads/avatar/' . $id .'.'. $ext;
                        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                        $sql3=$db->query("UPDATE animal SET imagen='$ruta' WHERE id='$id';");
                    }
                    $db->liberar($sql,$sql2,$sql3);
                    $db->close();
                    header('location: ?view=editar$id='.$this->id.'&success=1');
                    exit;
                }
            }
            else{
                header('location: ?view=editar$id='.$this->id.'&error=1');
            }
            //Fin Control de error para usuario
        }
    }
           

    // public function Editar(){
    //     if (!empty($_POST['nombre']) and !empty($_POST['reino'] and !empty($_POST['filo'] and !empty($_POST['clase'])) {

    //         $db = new conexion();
    //         $this->nombre = $db->real_escape_string($_POST['nombre']);
    //         $this->filo = $db->real_escape_string($_POST['filo']);
    //         $this->id = $db->real_escape_string($_POST['id']);
    //         $this->subfilo = $db->real_escape_string($_POST['subfilo']);
    //         $this->reino = $db->real_escape_string($_POST['reino']);
    //         $this->subreino = $db->real_escape_string($_POST['subreino']);
    //         $this->clase = $db->real_escape_string($_POST['clase']);
    //         $this->orden = $db->real_escape_string($_POST['orden']);
    //         $this->familia = $db->real_escape_string($_POST['familia']);
    //         $this->genero = $db->real_escape_string($_POST['genero']);
    //         $this->especie = $db->real_escape_string($_POST['especie']);
            

    //         //Control de error para animales
    //         if (isset($this->id)) {
    //             $sql = $db->query("SELECT FROM animal WHERE id='$this->id';");

    //             if ($db->rows($sql) > 0) {
    //                 $animal = $db->recorrer($sql);
    //                 $this->imagen=$animal['imagen'];
    //                 $db->liberar( $sql);
    //                 $db->close();
    //                 header('location: ?view=editar$id='.$this->id.'&error=5');
    //                 exit;
    //             }
    //         }
    //         //Fin Control de error para usuario
           
            
    //         //Control de error para la subida de imagen
    //         if ($_FILES['foto']['name'] != '') {
    //             $ext = end(explode('.', $_FILES['foto']['name']));
    //             $extensiones = array('jpg', 'png', 'gif', 'jpeg', 'JPG', 'PNG', 'GIF', 'JPEG');
    //             if (!in_array($ext, $extensiones)) {
    //                 header('location: ?view=cuenta&error=6');
    //                 exit;
    //             }
    //             $ruta = 'uploads/avatar/' . $this->id.'.'.$this->imagen;
    //             if(file_exists($ruta)){
    //                 unlink($ruta);
    //             }
    //             $ruta = 'uploads/avatar/' . $this->id .'.'. $ext;
    //             move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
    //         }
    //         //Fin Control de error para la subida de imagen

    //       // $tiempo_cambio = $c_cambio== 1 ? time()+(60*60*24*31):0;
    //         if(isset($c_cambio)){
    //             $tiempo_cambio=time()+(60*60*24*31);
    //         }else{
    //             $tiempo_cambio=$_SESSION['cambio'];
    //         }


    //         $this->imagen=$ext;


    //         $update=$db->query("UPDATE animal SET nombre='$this->nombre',reino='$this->reino',subreino='$this->subreino',filo='$this->filo',subfilo='$this->subfilo',clase='$this->clase',orden='$this->orden',familia='$this->familia',genero='$this->genero',especie='$this->especie',imagen='$ext' WHERE id='$this->id'");
    //         $db->liberar($update);
    //         $db->close();
    //         header('location: ?view=editar&success=1');

    //     } else {
    //         header('location: ?view=editar&error=1');
    //     }
    // }
}