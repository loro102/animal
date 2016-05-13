<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Taxonomía Animal</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {if (isset($smarty.get.view) and $smarty.get.view =='index') or !isset($smarty.get.view)}
                <li class="active">{else}
                    <li>{/if}<a href="?view=index">Inicio <span class="sr-only">(current)</span></a></li>
                    {if (isset($smarty.get.view) and $smarty.get.view =='nuevo') or !isset($smarty.get.view)}
                <li class="active">{else}
                    <li>{/if}<a href="?view=nuevo">nuevo <span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar un animal..." name="busqueda" size="50" >
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
</nav>