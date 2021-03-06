{include 'overall/header.tpl'}

<body>

    {include 'overall/nav.tpl'}
    <div class="container" style="margin-top: 30px;">
        <center>
            <div>
                {if isset($smarty.get.sucess)}
                    {if $smarty.get.sucess==1}
                        <div class="alert alert-success" role="alert">El registro se ha añadido correctamente<button type="button" class="close" data-dismiss="alert">X</button></div>
                    {/if}
                    {if $smarty.get.sucess==1}
                        <div class="alert alert-success" role="alert">El registro se ha modificado correctamente<button type="button" class="close" data-dismiss="alert">X</button></div>
                    {/if}
                    {if $smarty.get.sucess==1}
                        <div class="alert alert-success" role="alert">El registro se ha borrado correctamente<button type="button" class="close" data-dismiss="alert">X</button></div>
                    {/if}
                {/if}
                {if isset($smarty.get.error)}
                    {if $smarty.get.error==1}
                        <div class="alert alert-danger" role="alert">El registro solicitado no existe<button type="button" class="close" data-dismiss="alert">X</button></div>
                    {/if}
                    {if $smarty.get.error==2}
                        <div class="alert alert-danger" role="alert">El archivo no es correcto, asegurese que sea una imagen con las siguientes extensiones jpg, png, gif, jpeg<button type="button" class="close" data-dismiss="alert">X</button></div>
                    {/if}
                {/if}
            </div>
            <form action="?view=nuevo" method="post" enctype="multipart/form-data" class="form-horizontal">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca el nombre del animal" required="" autofocus=""><br>
            </div>
            <label for="reino" class="col-sm-2 control-label">Reino</label>
            <div class="col-sm-10">
            <input type="text" name="reino" id="reino" class="form-control" placeholder="Introduzca el reino" required="" autofocus=""><br>
            </div>
            <label for="subreino" class="col-sm-2 control-label">Subreino</label>
            <div class="col-sm-10">
            <input type="text" name="subreino" id="subreino" class="form-control" placeholder="Introduzca el subreino" required="" autofocus=""><br>
            </div>
            <label for="filo" class="col-sm-2 control-label">Filo</label>
            <div class="col-sm-10">
            <input type="text" name="filo" id="filo" class="form-control" placeholder="Introduzca el filo" required="" autofocus=""><br>
            </div>
            <label for="subfilo" class="col-sm-2 control-label">Subfilo</label>
            <div class="col-sm-10">
            <input type="text" name="subfilo" id="subfilo" class="form-control" placeholder="Introduzca el subfilo" required="" autofocus=""><br>
            </div>
            <label for="clase" class="col-sm-2 control-label">Clase</label>
            <div class="col-sm-10">
            <input type="text" name="clase" id="clase" class="form-control" placeholder="Introduzca el clase" required="" autofocus=""><br>
            </div>
            <label for="orden" class="col-sm-2 control-label">Orden</label>
            <div class="col-sm-10">
            <input type="text" name="orden" id="orden" class="form-control" placeholder="Introduzca el orden" required="" autofocus=""><br>
            </div>
            <label for="familia" class="col-sm-2 control-label">Familia</label>
            <div class="col-sm-10">
            <input type="text" name="familia" id="familia" class="form-control" placeholder="Introduzca la familia" required="" autofocus=""><br>
            </div>
            <label for="genero" class="col-sm-2 control-label">Genero</label>
            <div class="col-sm-10">
            <input type="text" name="genero" id="genero" class="form-control" placeholder="Introduzca el genero" required="" autofocus=""><br>
            </div>
            <label for="especie" class="col-sm-2 control-label">Especie</label>
            <div class="col-sm-10">
            <input type="text" name="especie" id="especie" class="form-control" placeholder="Introduzca la especie" required="" autofocus=""><br>
            </div>
            <label for="imagen" class="col-sm-2 control-label">Imagen</label>
            <div class="col-sm-10">
            <input type="file" name="imagen" id="imagen" class="file file-loading" data-preview-file-type="image" multiple data-show-upload="false"  ><br>
            
            </div>
              <input class="btn btn-primary btn-block" type="submit" value="Enviar" />
</form>
        </center>
    </div>
    {include 'overall/footer.tpl'}
</body>

</html>
