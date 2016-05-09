{include 'overall/header.tpl'}
<body>

    {include 'overall/nav.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                {include 'overall/menu.tpl'}
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                {if isset($post)}
                <h2 class="sub-header">{$post.titulo}</h2>

                <!-- Post Principal -->
                <div class="media">
                    <div class="media-left" style="text-align: center;">
                        <a href="?view=perfil&id={$post.dueno}" target="_blank">
                            <img class="media-object" src="{$image}" width="80" height="80" />
                        </a>
                        <small><strong>{$user}</strong> <br /> <span style="color: {$c_estado}">{$estado}</span></small>
                    </div>
                    <div class="media-body principal-post">
                        {$contenido}
                    </div>
                </div>
                <!-- Post Principal -->

                <!-- Comentario -->
                <div class="media">
                    <div class="media-body comun-post">
                        Esto es un comentario
                    </div>
                    <div class="media-right" style="text-align: center;">
                        <a href="?view=perfil&user=ID">
                            <img class="media-object" src="uploads/avatar/default.png" width="80" height="80" />
                        </a>
                        <small><strong>Usuario</strong> <br /> <span style="color: #FF0000">Offline</span></small>
                    </div>
                </div>
                <!-- Comentario -->

                <!-- AJAX de comentarios -->
                <div id="_COMMENTS_">
                    <!--<div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">Haciendo espacio para tu comentario...</div>-->
                </div>

                {if isset($smarty.session.user)}
                <div id="_POINTS_">
                    <nav>
                        <center>
                            <ul class="pagination">
                                {for $x=1 to 10}
                                <li><a style="cursor:pointer;" onclick="AddPoints({$x});">{$x}</a></li>
                                {/for}
                            </ul>
                        </center>
                    </nav>

                    <!--<nav>
                        <center>
                              <div class="puntos-agregados">Puntos agregados correctamente</div>
                        </center>
                    </nav>
                    <nav>
                        <center>
                              <div class="puntos-no-agregados">Ya has puntuado antes este post</div>
                        </center>
                    </nav>-->
                </div>
                {/if}
                <!-- condición de inciio de sesión -->
                {if isset($smarty.session.user)}
                <div class="media">
                    <div class="media-body">
                        <textarea class="form-control" id="comentario" placeholder="Hacer un comentario..."></textarea>
                        <center>
                            <a style="margin-top: 7px;" href="#" id="send_request" class="btn btn-primary btn-sm">Comentar</a>
                        </center>
                    </div>
                    <div class="media-right" style="text-align: center;">
                        <img class="media-object" src="uploads/avatar/default.png" width="80" height="80" />
                    </div>
                </div>
                {else}
                <div class="media">
                    <div class="alert alert-warning" role="alert" style="text-align:center;">
                        <strong>Debes <a href="?view=login">iniciar sesion</a> para poder comentar.</strong>
                    </div>
                </div>
                {/if}
                {else}
                <div class="media">
                    <div class="alert alert-danger" role="alert">
                        <strong>ERROR:</strong> El post solicitado no existe o ha sido borrado.
                    </div>
                </div>
                {/if}
            </div>
        </div>
    </div>

    {include 'overall/footer.tpl'}
    {if isset($smarty.session.user)}
    <script>
        function AddPoints($points) {
            var connect, session, form, result;
            if (parseInt($points) >= 1 && parseInt($points) <= 10 && {$smarty.session.id} != {$post.dueno} ) {
                form = 'points=' + $points;
                connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

                connect.onreadystatechange = function () {
                    if (connect.readyState == 4 && connect.status == 200) {
                        if (parseInt(connect.responseText) == 1) {
                            //Conectado con exito
                            //Se redirecciona
                            result = '<nav><center>';
                            result += '<div class="puntos-agregados">Puntos agregados correctamente</div>';
                            result += '</center></nav>';
                            document.getElementById('_POINTS_').innerHTML = result;
                        } else {
                            //ERROR: Los puntos ya han sido agregados
                            result = '<nav><center>';
                            result += '<div class="puntos-no-agregados">Ya has puntuado antes este post</div>';
                            result += '</center></nav>';
                            document.getElementById('_POINTS_').innerHTML = result;
                        }
                    } else if (connect.readyState != 4) {
                        //procesando
                        result = '<nav><center>';
                        result += '<div class="agregando-puntos">agregando puntos</div>';
                        result += '</center></nav>';

                    }
                };
                connect.open('POST', '?view=post&id={$smarty.get.id}&mode=puntos', true);
                connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                connect.send(form);
            }else {
                //ERROR: Los puntos ya han sido agregados
                result = '<nav><center>';
                result += '<div class="puntos-no-agregados">No puedes puntuarte tu mismo</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;
            }
        }
    </script>

    {/if}
</body>
</html>       