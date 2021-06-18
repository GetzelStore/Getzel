<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Getzel, Audio y Video" />
    <meta name="author" content="victorruiz524@gmail.com" />
    <meta name="author" content="djdither@gmail.com" />


    <title>Getzel</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/animations.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/modal.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet" />


</head>

<body id="page-top" class="overlay-bg">
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid">

            <a href="#page-top" class="logo-container jsScroll preDef">
                <img src="assets/img/Getzel-cube.png" alt="" class="logoSM logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse navigationScr" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item dropdown mt-3 mt-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fa fa-video"></span> Audio y Video
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item preDef jsScroll" href="#estadio">Estadios</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#ambiental">Centro Comercial</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#tiendas">Tiendas</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#audio">Audio y Video distribuido</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#conferencias">Salas</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#auditorios">Auditorios</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#recintos">Recintos</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#casinos">Casinos</a></li>
                            <li><a class="dropdown-item preDef jsScroll" href="#antros">Antros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link preDef jsScroll" href="#contacto"><span class="fa fa-user"></span> Contacto</a></li>
                    <li class="nav-item "><a class="nav-link" href="store/"> <span class="fa fa-store"></span> Tienda</a></li>
                    <li class="nav-item cd-section">
                        <div class="cd-modal-action">
                            <a href="javascript:;" class="btn btn-info btn-round NameUser" data-type="modal-trigger">Login</a>
                            <span class="cd-modal-bg"></span>
                        </div>

                        <div class="cd-modal">
                            <div class="cd-modal-content animate animatefadeIn">

                                <div class="container h-100 position-relative">
                                    <div class="row m-auto">
                                        <div class="wrap-login100">
                                            <span class="login100-form-title py-5">
                                                Iniciar Sesión
                                            </span>
                                            <?php
                                            include"Template/Login.php"
                                            ?>
                                        </div>
                                    </div>
                                </div>


                            </div> <!-- cd-modal-content -->
                        </div> <!-- cd-modal -->

                        <a href="#0" class="cd-modal-close">Close</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="banner" class="animate animatefadeIn">
        <header class="row vh-100 align-items-center">
            <div class="overlay"></div>
            <div class="d-none d-sm-none d-md-block">
                 <video class="Vde" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="./assets/Vid/Video Production.mp4" type="video/mp4">
                </video>
            </div>
            <div class="d-block d-sm-block d-md-none">
                <video class="Vdm" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="./assets/Vid/Monbi1.mp4" type="video/mp4">
                </video>
            </div>

            <div class="container align-middle d-block position-relative Space">
                <div class="row align-items-center justify-content-between">
                    <!-- <div class="col-12 col-lg-8">
                        <div class="ml-auto col-lg-10 text-lg-right">
                            <h1 class="d-none">Getzel</h1>
                            <img class="logoText my-4" src="assets/img/Getzel-tit.png" alt="Getzel">
                            <p class="">
                                Somos una empresa dedicada a ofrecer soluciones integrales de equipo y
                                servicio donde convergen las mejores marcas del mercado para cubrir las
                                necesidades de nuestros clientes.
                                Servicio e integración de calidad para satisfacer sus necesidades.
                            </p>
                        </div>
                    </div>-->
                    <div class="container-fluid">
                        <div class="col-sm-12 container mx-auto d-block animate animatefadeInUp" style="animation-delay: 400ms;"><img class="logoText my-4" src="assets/img/Getzel-tit.png" alt="Getzel"></div>
                        <div class="col-sm-12 container text-center animate animatefadeInUp" style="animation-delay: 600ms;"> Somos una empresa dedicada a ofrecer soluciones integrales de equipo y</br>
                            servicio donde convergen las mejores marcas del mercado para cubrir las
                            necesidades de nuestros clientes.</br>
                            Servicio e integración de calidad para satisfacer sus necesidades.</div>
                        <div class="gallery col-12 bg-ov mt-5 animate animatefadeInUp" style="animation-delay: 800ms;">

                            <div class="gallery-container">
                                <img class="gallery-item gallery-item-1" src="./store/img/cam1.png" data-index="1">
                                <img class="gallery-item gallery-item-2" src="./store/img/yolo.png" data-index="2">
                                <img class="gallery-item gallery-item-3" src="./store/img/extreme.png" data-index="3">
                                <img class="gallery-item gallery-item-4" src="./store/img/yolo2.png" data-index="4">
                                <img class="gallery-item gallery-item-5" src="./store/img/pro.png" data-index="5">
                            </div>
                            <div class="gallery-controls"></div>
                        </div>
                        <div class="scroller">
                            <div class="col-md-12 col-12 text-center ma">
                                <a class="Atext" href="store/"><span class="fa fa-store"></span> Visita nuestra tienda</a>
                            </div>
                            <!--<a href="#estadio" class="preDef jsScroll text-info">
                                <span class="mouse">
                                    <span class="scroll-down">
                                    </span>
                                </span>
                                Baja para saber más
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </main>


    <section id="estadio" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-bottom d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img1.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="text-center col-md-4 col-12">
                        <h2>Diseño sonoro para estadios</h2>
                    </header>

                    <ul class="list-guion col-md-4 col-12">
                        <li>Predicción de respuesta sonora de reciento.</li>
                        <li>Medición de ruido de fondo (ambiente).</li>
                        <li>Acondicionamiento de acústico de recinto.</li>
                        <li>Aislamiento acústico.</li>
                        <li>Cobertura controlada de refuerzo sonoro.</li>
                    </ul>

                    <ul class="list-guion col-md-4 col-12">
                        <li>Red de cableado de potencia garantizado.</li>
                        <li>Ajuste de tiempos de arribo en recinto.</li>
                        <li>Red de fibra optica incorporada a sistemas.</li>
                        <li>Cableado estructurado certificado de RED LAN requerida.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section id="ambiental" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-right d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img2.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Audio Ambiental en Centros Comerciales</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Diseño de audio ambiente basado en plano arquitectónico.</li>
                        <li>Requerimientos mínimos preinstalación.</li>
                        <li>Acondicionamiento de cuarto de control.</li>
                        <li>Optimización de recursos existentes.</li>
                        <li>Mantenimiento preventivo y correctivo de ambiente.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="tiendas" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-left d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img3.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Audio ambiental y voceo en tiendas</h2>
                    </header>
                    <ul class="list-guion my-3 col-12">
                        <li>Predicción de nivel sonoro.</li>
                        <li>Memoria técnica.</li>
                        <li>Instalación a nivel nacional.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="audio" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-right d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img4.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Audio y Video distribuido</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Equipamiento y acondicionamiento de SITE.</li>
                        <li>Cableado estructurado de audio y Video.</li>
                        <li>Diseño de interface gráfica de usuario.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="conferencias" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-left d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img5.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Salas de conferencia</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Equipamiento y acondicionamiento de cuarto de control.</li>
                        <li>Automatización de servicios.</li>
                        <li>Diseños de interface gráfica de usuario.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="auditorios" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-right d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img6.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Auditorios, Gimnasios, Canchas</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Estudio y diseño acústico.</li>
                        <li>Mecánica teatral.</li>
                        <li>Acondicionamiento y Aislamiento acustico.</li>
                        <li>Iluminación teatral (CDMX).</li>
                        <li>Sistema de audio Line Array.</li>
                        <li>Cuarto de control.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="recintos" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-left d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img7.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Recintos</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Predicción sonora con sistemas direccionales.</li>
                        <li>Restauración de recintos.</li>
                        <li>Ajuste de tiempos de reservación en recinto.</li>
                        <li>Optimización de equipo existente.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="casinos" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-right d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img8.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <header class="pt-3 py-md-5 text-center col-12">
                        <h2>Casinos</h2>
                    </header>

                    <ul class="list-guion my-3 col-12">
                        <li>Sembrado de audio y video en plano CAD, (ubicación y trayectorias).</li>
                        <li>Audio ambiente por zonas.</li>
                        <li>Video distribuido.</li>
                        <li>Video WALL.</li>
                        <li>Acondicionamiento de SITE ( aire acondicionado, aislamiento acústico, anclaje de Racks a
                            muro o
                            piso, peinado de cableado, etiquetado de lineas, <br>
                            configuración de equipos).</li>
                        <li>CCTV (Propuesta sobre plano CAD, ubicación y trayectorias, monitoreo MultiView,
                            almacenamiento
                            administrativo de contenido en la nube).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="antros" class="page-section section-img parallax">
        <div class="container-fluid content-dark border-0 p-bottom d-md-none animate">
            <div class="container">
                <div class="row d-md-none img-resp">
                    <img src="assets/img/img9.jpeg" alt="">
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-4">
                        <header class="pt-3 pt-md-0 text-center">
                            <h2>Antros</h2>
                        </header>
                    </div>
                    <ul class="list-guion col-12 col-md-4">
                        <li>Audio distribuido por zonas controlado via WI-FI.</li>
                        <li>Audio exclusivo para privados o zonas VIP.</li>
                        <li>Video distribuido controlado vía WI-FI.</li>
                        <li>Iluminación controlada via DMX automatizada.</li>
                    </ul>

                    <ul class="list-guion col-12 col-md-4">
                        <li>Equipamiento profesional para cabina de DJ.</li>
                        <li>Mantenimiento de equipo de audio, video y CCTV.</li>
                        <li>Integración y optimización de equipos existentes.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="page-section overlay-bg py-5 mt-4">
        <div class="container-fluid">
            <div class="container">
                <div class="card bg-dark">
                    <div class="card-header mt-3">
                        <div class="text-center">
                            <h3 class="section-heading text-uppercase">Contactanos</h3>
                            <h3 class="section-subheading text-muted mb-2">Requieres mas información, envianos un
                                mensaje.
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Tu Nombre *" required="required" data-validation-required-message="Ingresa tu nombre." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Tu Email *" required="required" data-validation-required-message="Ingresa tu email." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <input class="form-control" id="phone" type="tel" placeholder="Tu Telefono *" required="required" data-validation-required-message="Ingresa tu nuemero de telefono." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-textarea mb-md-0">
                                        <textarea class="form-control" id="message" placeholder="Tu mensaje *" required="required" data-validation-required-message="Ingresa tu mensaje."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div id="success"></div>
                                <button class="btn btn-info btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer pb-3 pt-1 bg-black" id="footerPage">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 col-md-4 my-2 my-md-0">
                    <span class="icon">
                        <i class="far fa-envelope"></i>
                    </span>
                    <h4>Email</h4>
                    <a href="mailto:gabriela.gutierrez@getzelsa.com">gabriela.gutierrez@getzelsa.com</a>
                    <a href="mailto:informacion@getzelsa.com">informacion@getzelsa.com</a>
                </div>
                <div class="col-12 col-md-4 my-2 my-md-0">
                    <span class="icon">
                        <i class="fas fa-phone"></i>
                    </span>
                    <h4>Teléfono</h4>
                    <a href="tel:+5215556395892">5556395892</a>

                </div>
                <div class="col-12 col-md-4 my-2 my-md-0">
                    <span class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <h4>Dirección</h4>
                    <a href="https://goo.gl/maps/fe6gQJNsV5qQdDL8A" target="_blank">NARCISOS 121, JARDINES DE COYOACÁN, CIUDAD DE MÉXICO, C.P. 04890</a>
                </div>
            </div>


            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 text-lg-left">
                    Copyright &copy; Getzel
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>




    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Contact form JS-->
    <!-- <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script> -->
    <!-- Core theme JS-->
    <script src="js/velocity.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/Conection.js"></script>

</body>

</html>