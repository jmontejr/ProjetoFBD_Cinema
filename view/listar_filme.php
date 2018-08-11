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

            <div class="row" style="margin-top:150px!important;">

                <div class="col-md-6 col-lg-6"><h2>Filmes</h2></div>
                <div class="col-md-6 col-lg-6 text-right">
                    <a href="inserir_filme.php" class="btn btn-primary">Adicionar</a>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-lg-12" style="margin-top: 20px!important;">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th> 
                                    <th scope="col">Título Original</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">País Origem</th>
                                    <th scope="col">Diretor</th>
                                    <th scope="col">Título Português</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <?php $filmes = getAllFilmesController(); ?>
                            <?php foreach ($filmes as $filme): ?>

                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $filme['Id_Filme'] ?></th>
                                    <td><?php echo $filme['Título_Original'] ?></td>
                                    <td><?php echo $filme['Duração'] ?></td>
                                    <td><?php echo $filme['País_Origem'] ?></td>
                                    <td><?php echo $filme['Diretor'] ?></td>
                                    <td><?php echo $filme['Título_Português'] ?></td>
                                    <td>
                                        <div class="px-1 py-1">
                                            <a href=<?php echo "detalhe_filme.php?Id_Filme=".$filme["Id_Filme"]; ?> class="btn btn-sm btn-info">Detalhar</a>
                                        </div>
                                        <div class="px-1 py-1">
                                            <a href=<?php echo "editar_filme.php?Id_Filme=".$filme["Id_Filme"]; ?> class="btn btn-sm btn-primary">Editar</a>
                                        </div>
                                        <div class="px-1 py-1">
                                            <a href=<?php echo "remover_filme.php?Id_Filme=".$filme["Id_Filme"]; ?> class="btn btn-sm btn-danger">Remover</a>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                            
                            <?php endforeach; ?>
                        </table>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12" style="margin-top:10px!important;margin-bottom:10px!important;">
                    <a href="../index.php" class="btn btn btn-outline-dark">Voltar</a>
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