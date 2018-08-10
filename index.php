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

    </head>

    <body data-spy="scroll" data-target="#navbar-site">

        <!-- MENU -->
        <nav class="navbar transparent navbar-padded navbar-expand-sm fixed-top navbar-light" id="navbar-site">
            <a class="navbar-brand scroll" href="#home">
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
                        <a class="nav-link text-uppercase scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase scroll" href="#produtos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase scroll" href="#quem-somos">Quem somos</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->

        </nav><!-- /MENU -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="btn-top">
                        <a class="scroll" href="#home">
                            <i class="fas fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER -->
        <header class="home" id="home">
            <div class="texto-home text-left px-5">
                <h1 class="text-uppercase">Administradora de Cinemas</h1>
                <p class="lead">
                    Tenha suas sessões, filmes e atores listados aqui!<br>
                    Cadastre, edite e lista todos os seus produtos conosco.
                </p>
                <a class="btn-custom btn-branco text-uppercase scroll" href="#produtos">Saiba mais</a>
            </div>
        </header><!-- /HEADER -->

        <!-- CONTEÚDO -->
        <div id="conteudo">

            <!-- SAIBA MAIS -->
            <section id="produtos">

                <div class="container py-4">

                    <!-- row -->
                    <div class="row py-4">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="text-center">
                                <h2 class="text-uppercase heading-color">Nossos Serviços</h2>
                                <div class="div-animate fade-ani fade-up">
                                    <hr class="divider">
                                </div>
                            </div>
                        </div>

                        <!-- here -->
                        <div class="row">
                        
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="div-animate fade-ani fade-down">
                                    <figure class="effect-layla">
                                        <img class="card-img-top" src="view/assets/imgs/cinema.jpg" alt="img06" />
                                        <figcaption>
                                            <h2>
                                                <span>Cinemas</span>
                                            </h2>
                                            <p>Veja as opções disponíveis</p>
                                            <a href="#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="div-animate fade-ani fade-down">
                                    <figure class="effect-layla">
                                        <img class="card-img-top" src="view/assets/imgs/odontologia1.jpg" alt="img06" />
                                        <figcaption>
                                            <h2>
                                                <span>Sessões</span>
                                            </h2>
                                            <p>Veja as opções disponíveis</p>
                                            <a href="#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="div-animate fade-ani fade-up">
                                    <figure class="effect-layla">
                                        <img class="card-img-top" src="view/assets/imgs/ortodontia.jpg" alt="img06" />
                                        <figcaption>
                                            <h2>
                                                <span>Filmes</span>
                                            </h2>
                                            <p>Veja as opções disponíveis</p>
                                            <a href="#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="div-animate fade-ani fade-up">
                                    <figure class="effect-layla">
                                        <img class="card-img-top" src="view/assets/imgs/odontologia2.jpg" alt="img06" />
                                        <figcaption>
                                            <h2>
                                                <span>Atores</span>
                                            </h2>
                                            <p>Veja as opções disponíveis</p>
                                            <a href="#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <!-- /here -->

                    </div><!-- row -->

                </div>

            </section><!-- /SAIBA MAIS -->

            <!-- QUEM SOMOS -->
            <section id="quem-somos">

                <div class="container py-4">

                    <!-- row -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 px-5 py-4">
                            <h2 class="text-uppercase text-center heading-color">Quem somos</h2>
                            <div class="div-animate fade-ani fade-up">
                                <hr class="divider">
                            </div>
                            
                            <div class="div-animate fade-ani fade-down">

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="div-animate fade-ani fade-down">
                                            <figure class="effect-layla">
                                                <img class="card-img-top" src="view/assets/imgs/monte.jpg" alt="img06" />
                                                <figcaption>
                                                    <h2> José
                                                        <span>Monte</span>
                                                    </h2>
                                                    <p>
                                                        Discente de Sistemas de Informação da UFRPE
                                                    </p>
                                                    <a href="https://github.com/jmontejr" target="_blank">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="div-animate fade-ani fade-down">
                                            <figure class="effect-layla">
                                                <img class="card-img-top" src="view/assets/imgs/misabel.jpeg" alt="img06" />
                                                <figcaption>
                                                    <h2>Isabel
                                                        <span>Santiago</span>
                                                    </h2>
                                                    <p>
                                                        Discente de Sistemas de Informação da UFRPE
                                                    </p>
                                                    <a href="https://github.com/belcsantiago" target="_blank">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="div-animate fade-ani fade-up">
                                            <figure class="effect-layla">
                                                <img class="card-img-top" src="view/assets/imgs/pOliveira.jpg" alt="img06" />
                                                <figcaption>
                                                    <h2>Pamella
                                                        <span>Oliveira</span>
                                                    </h2>
                                                    <p>
                                                        Discente de Sistemas de Informação da UFRPE
                                                    </p>
                                                    <a href="https://github.com/pamellaOliveira" target="_blank">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                    </div><!-- row -->

                </div>

            </section><!-- /QUEM SOMOS -->

        </div><!-- /CONTEÚDO -->


        <!-- Footer -->
        <footer id="rodape">

            <div class="container py-4">

                <!-- row -->
                <div class="row text-center py-3">

                    <div class="col-xs-12 col-sm-12 col-md-4 py-1">
                        <a class="scroll" href="#home">
                            <span class="img-logo mx-auto">Administradora de Cinemas</span>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-2 col-md-4 py-1">
                        <a class="scroll" href="#produtos">
                            <h3 class="text-capitalize">Serviços</h3>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-2 col-md-4 py-1">
                        <a class="scroll" href="#quem-somos">
                            <h3 class="text-capitalize">Quem somos</h3>
                        </a>
                    </div>

                </div>

            </div>

            <div class="container-fluid">
                <div class="row text-center rights py-3">
                    <div class="col-md-12">
                        <span class="align-self-center align-middle">Todos os direitos reservados &copy; 2018</span>
                    </div>
                </div>
            </div>

            <!-- ================================ -->

        </footer><!-- /Footer -->


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