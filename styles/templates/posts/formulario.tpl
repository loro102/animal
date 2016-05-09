{include 'overall/header.tpl'}

<body>

    {include 'overall/nav.tpl'}
    <div class="container" style="margin-top: 30px;">
        <center>
            <div id="_AJAX_">

            </div>
            <form action="?view=nuevo" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group" style="width:500px;">
                    <h2 class="form-signin-heading">{$titulo}</h2>
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" id="nombre" class="form-control" placeholder="Introduczca el nombre del animal" required="" autofocus="" value="{$nombre}">
                    </div>
                    <label for="reino" class="col-sm-2 control-label">Reino</label>
                    <div class="col-sm-10">
                        <input type="text" id="reino" class="form-control" placeholder="Introduzca el reino" required="" value="{$reino}">
                    </div>
                    <label for="subreino" class="col-sm-2 control-label">Subreino</label>
                    <div class="col-sm-10">
                        <input type="text" id="subreino" class="form-control" placeholder="Introduzca el subreino" required="" value="{$subreino}">
                    </div>
                    <label for="filo" class="col-sm-2 control-label">Filo</label>
                    <div class="col-sm-10">
                        <input type="text" id="filo" class="form-control" placeholder="Introduzca el filo" required="" value="{$filo}">
                    </div>
                    <label for="subfilo" class="col-sm-2 control-label">Subfilo</label>
                    <div class="col-sm-10">
                        <input type="text" id="subfilo" class="form-control" placeholder="Introduzca el subfilo" required="" value="{$subfilo}">
                    </div>
                    <label for="clase" class="col-sm-2 control-label">Clase</label>
                    <div class="col-sm-10">
                        <input type="text" id="clase" class="form-control" placeholder="Introduzca la clase" required="" value="{$clase}">
                    </div>
                    <label for="orden" class="col-sm-2 control-label">Orden</label>
                    <div class="col-sm-10">
                        <input type="text" id="orden" class="form-control" placeholder="Introduzca el orden" required="" value="{$orden}">
                    </div>
                    <label for="familia" class="col-sm-2 control-label">Familia</label>
                    <div class="col-sm-10">
                        <input type="text" id="familia" class="form-control" placeholder="Introduzca la familia" required="" value="{$familia}">
                    </div>
                    <label for="genero" class="col-sm-2 control-label">Género</label>
                    <div class="col-sm-10">
                        <input type="text" id="genero" class="form-control" placeholder="Introduzca el genero" required="" value="{$genero}">
                    </div>
                    <label for="especie" class="col-sm-2 control-label">Especie</label>
                    <div class="col-sm-10">
                        <input type="text" id="especie" class="form-control" placeholder="Introduzca la especie" required="" value="{$especie}">
                    </div>
                    <br>
                    <div class="media-left media-bottom">
                        <img class="media-object" src="{$image}" width="150" height="150" />
                    </div>
                    <div class="media-body">
                        <label>Imagen del animal</label>
                        <input type="file" name="foto" id=imagen />
                        <input type="hidden" id="id" class="form-control" " value="{$id}">
                    </div>

                    <br>
                    <input class="btn btn-primary btn-block" id="enviar" type="submit" value="Enviar" />
                </div>
            </form>
        </center>
    </div>
    {include 'overall/footer.tpl'}
</body>

</html>