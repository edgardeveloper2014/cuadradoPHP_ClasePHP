<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es" class="full-height">
    <head>
        <meta charset="UTF-8">
        <title>Cuadrado</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/parsley.min.js" type="text/javascript"></script>
        <script src="js/es.js" type="text/javascript"></script>

    </head>
    <body>
        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#"><strong>Edeveloper</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acerca</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Perfil</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>

            <!--Intro Section-->
            <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="row flex-center pt-5 mt-3">
                            <div class="col-md-6 text-center text-md-left margins">

                                <div class="container jumbotron">
                                    <form action="Controller/CuadradoController.php" method="post" data-parsley-validate="">

                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix grey-text"></i>
                                            <input type="text" id="num" class="form-control" name="txtnum" data-parsley-required="true" data-parsley-type="digits">
                                            <label for="num">Ingrese un numero</label>
                                        </div>

                                        <input type="submit" class="btn btn-cyan" value="generar">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6 justify-content-center" data-wow-delay="0.3s">
                                <img src="img/iphone-admin.png"  height="300" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </header>
        <!--Main Navigation-->


        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/mdb.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script>
            $('form').parsley();
        </script>

    </body>

</html>
