<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <link rel="icon" href="view/assets/imgs/logo.png"/>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administradora de Cinemas</title>

        <!-- CSS Style Sheets -->
        <link rel="stylesheet" type="text/css" media="screen" href="view/assets/css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="view/assets/css/set1.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="view/assets/css/animate.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="view/assets/css/ie10-viewport-bug-workaround.css" />

        <!-- Normalize CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="view/assets/css/normalize.css" />

        <!-- Bootstrap CSS Style Sheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

        <!-- Scroll -->
        <script src="view/assets/js/scroll.js"></script>

        <?php

            require_once("../control/filme_controller.php");
        
            if(isset($_GET["Id_Filme"])){
                $id = $_GET["Id_Filme"];
                $filme = getOneFilmeController($id);
            }

        ?>

    </head>

    <body>

        <!-- MENU -->
        <nav class="navbar transparent navbar-padded navbar-expand-sm fixed-top navbar-light" id="navbar-site">
            <a class="navbar-brand scroll" href="../index.php">
                <span class="img-logo">Administradora de Cinemas</span>
            </a>

            <button
            class="navbar-toggler navbar-toggler-right d-md-none"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase scroll" href="../index.php">Home</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->

        </nav><!-- /MENU -->

        <div class="container">

            <div class="row" style="margin-top:150px!important;margin-bottom:20px!important;">

                <h2>Editar Filme</h2>

                <div class="col-md-12 col-lg-12" style="margin-top: 20px!important;">

                    <form action="../control/filme_controller.php" method="post">
                        
                        <div class="form-group">
                            <label for="tOriginal">Título Original</label>
                            <input type="text" class="form-control" id="tOriginal" name="editar_filme['Título_Original']" value="<?php echo $filme['Título_Original'] ?>" placeholder="Título Original">
                        </div>

                        <div class="form-group">
                            <label for="duracao">Duração</label>
                            <input type="text" class="form-control" id="duracao" name="editar_filme['Duração']" value="<?php echo $filme["Duração"] ?>" placeholder="Duração">
                        </div>

                        <div class="form-group">
                            <label for="pais">País Origem</label>
                            <input type="text" class="form-control" id="pais" name="editar_filme['País_Origem']" value="<?php echo $filme["País_Origem"] ?>" placeholder="País Origem">
                        </div>

                        <div class="form-group">
                            <label for="diretor">Diretor</label>
                            <input type="text" class="form-control" id="diretor" name="editar_filme['Diretor']" value="<?php echo $filme["Diretor"] ?>" placeholder="Diretor">
                        </div>

                        <div class="form-group">
                            <label for="tPt">Título Português</label>
                            <input type="text" class="form-control" id="tPt" name="editar_filme['Título_Português']" value="<?php echo $filme["Título_Português"] ?>" placeholder="Título Português">
                        </div>

                        <div class="row text-center">
                            <div class="px-2">
                                <a href="listar_filme.php" class="btn btn-danger">Cancelar</a>
                            </div>
                            <div class="px-2">
                                <input type="hidden" name="Id_Filme" value="<?php echo $filme['Id_Filme'] ?>">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- Scroll -->
        <script src="view/assets/js/scroll.js"></script>
        <!-- Menu color transition -->
        <script src="view/assets/js/menu-color.js"></script>
        <!-- Animate fade js -->
        <script src="view/assets/js/animate-fade.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    </body>

</html>