<!DOCTYPE html>
<html>
    <?php
    include "./includes/config.php"; // Arquivo padrão de configuração do sistema que carregará variáveis de ambiente.
    include './includes/conecta.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link type="text/css" rel="stylesheet" href="./css/estilo.css">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="./js/jquery.min.js"></script>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $(document).mousemove(function (e) {
                    TweenLite.to($('body'),
                            .5,
                            {css:
                                        {
                                            backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px"
                                        }
                            });
                });
            });
        </script>

        <!--script type="text/javascript">
            window.location = "./admin/index.php"
        </script-->

        <style>
            body{
                background-color: #444;
            }

            .vertical-offset-100{
                padding-top:100px;
            }

        </style>

    </head>
    <body>


        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" method="post" action="./includes/login.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuário" name="login" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                    </div>
                                    <!--div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me"> Lembrar-me
                                        </label>
                                    </div-->
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<!-- Evaldo aqui --> 