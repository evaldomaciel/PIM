<!DOCTYPE html>
<html>
    <head>
        <?php
        require_once '../classes/PaginasArmazena.php';
//        require_once '../classes/Paginas.php';
//        $Pagina = new Paginas();
//        $Pagina->getPage(@$_REQUEST[p]);
//        echo $Pagina->getTituloPagina();
        ?><meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/estilo.css">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery.min.js"></script>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <title><?php echo $tituloPagina; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Locauto</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
                        <!--li><a href="#">Link</a></li-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?p=cadastrarCliente">Cadastrar</a></li>
                                <li><a href="?p=procurarCliente">Manutenção</a></li>
                                <!--li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li-->
                            </ul>
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Funcionários<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?p=cadastraFuncionario">Cadastrar</a></li>
                                <li><a href="?p=procurarFuncionario">Manutenção</a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ajuda <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sobre</a></li>
                                <li><a href="#">Manual</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Suporte</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="principal">
            <?php
            include_once $link;
            ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                PIM 2016/02
            </div>
            <div class="panel-footer">Evaldo Maciel</div>
        </div>
    </body>
</html>