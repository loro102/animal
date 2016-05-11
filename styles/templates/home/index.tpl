{include 'overall/header.tpl'}

<body>

    {include 'overall/nav.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="main">
                <h2 class="sub-header">{$titulo}</h2>
                <div>
                    {if isset($smarty.get.sucess)}
                        {if $smarty.get.sucess==1}
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                El registro se ha modificado correctamente
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        {/if}
                    {/if}
                    {if isset($smarty.get.error)}
                        {if $smarty.get.error==1}
                            <div class="alert alert-danger" role="alert">El registro solicitado no existe<button type="button" class="close" data-dismiss="alert">&times;</button></div>
                        {/if}
                        {if $smarty.get.error==2}
                            <div class="alert alert-danger" role="alert">El archivo no es correcto, asegurese que sea una imagen con las siguientes extensiones jpg, png, gif, jpeg<button type="button" class="close" data-dismiss="alert">&times;</button></div>
                        {/if}
                    {/if}
                </div>
                <div class="container" style="margin-top: 70px;">
                    <div class="container-fluid col-md-12 ">
                        {if isset($animales)} 
                        {foreach from=$animales item=animal}
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="?view=editar&id={$animal.id}">{$animal.nombre}</a>
                                </div>
                                <div class="panel panel-body">
                                    <div class="container col-md-6">
                                        <div>Reino:{$animal.reino}</div>
                                        <div>Subreino:{$animal.subreino}</div>
                                        <div>Filo:{$animal.filo}</div>
                                        <div>Subfilo:{$animal.subfilo}</div>
                                        <div>Clase:{$animal.clase}</div>
                                        <div>Orden:{$animal.orden}</div>
                                        <div>Familia:{$animal.familia}</div>
                                        <div>Género:{$animal.genero}</div>
                                        <div>Especie:{$animal.especie}</div>
                                    </div>
                                    <img class="img-responsive col-md-6" src="{$animal.imagen}"/>
                                </div>
                            </div>
                        </div>
                        {/foreach} 
                        {else}
                        <h2>Sin animales que mostrar</h2> 
                        {/if}
                    </div>
                </div>
            </div>
            {if isset($posts)}
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                {if !isset($smarty.get.pag)}
                <a type="button" class="btn btn-default disabled" href="#">Anterior</a> {if $pags>1} {if isset($smarty.get.type)}
                <a type="button" class="btn btn-default" href="?view=index&type={$smarty.get.type}&pag=2">Siguiente</a> {else if isset($smarty.get.view) and $smarty.get.view =='buscar'}
                <a type="button" class="btn btn-default" href="?view=buscar&pag=2">Siguiente</a> {else}
                <a type="button" class="btn btn-default" href="?view=index&pag=2">Siguiente</a> {/if} {else}
                <a type="button" class="btn btn-default disabled" href="#">Siguiente</a> {/if} {else} {if $smarty.get.pag
                <=1 } <a type="button" class="btn btn-default disabled" href="#">Anterior</a>
                    {else} {if isset($smarty.get.type)}
                    <a type="button" class="btn btn-default" href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag-1}">Anterior</a> {else if isset($smarty.get.view) and $smarty.get.view =='buscar'}
                    <a type="button" class="btn btn-default" href="?view=buscar&pag={$smarty.get.pag-1}">Anterior</a> {else}
                    <a type="button" class="btn btn-default" href="?view=index&pag={$smarty.get.pag-1}">Anterior</a> {/if} {/if} {if $pags>1 and $smarty.get.pag>=1 and $smarty.get.pag
                    < $pags} {if isset($smarty.get.type)} <a type="button" class="btn btn-default"
                    href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag+1}">Siguiente</a>
                        {else if isset($smarty.get.view) and $smarty.get.view =='buscar'}
                        <a type="button" class="btn btn-default" href="?view=buscar&pag={$smarty.get.pag+1}">Siguiente</a> {else}
                        <a type="button" class="btn btn-default" href="?view=index&pag={$smarty.get.pag+1}">Siguiente</a> {/if} {else}
                        <a type="button" class="btn btn-default disabled" href="#">Siguiente</a> {/if} {/if}
            </div>
            {else} 
            {/if}
        </div>
    </div>
    </div>

    {include 'overall/footer.tpl'}
</body>

</html>