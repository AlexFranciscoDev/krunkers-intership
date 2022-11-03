<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Los krunkers - Pagina principal</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="../assets/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand pt-3 pb-3">KRUNKERS</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ url('offers') }}" class="nav-item nav-link active">Ver ofertas</a>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../assets/img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Las mejores pràcticas a tu alcance</h1>
                            <p>
                                ¿Estas estudiando y quieres poner a prueba tus habilidades?
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="{{ url('register') }}"><i class="fas fa-user-plus"></i></i>Únete</a>
                                <a class="btn" href="{{ url('login') }}"><i class="fa fa-sign-in-alt"></i></i>Iniciar sesión</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../assets/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Las mejores empresas adaptadas a tus necesidades</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="{{ url('register') }}"><i class="fas fa-user-plus"></i></i>Únete</a>
                                <a class="btn" href="{{ url('login') }}"><i class="fa fa-sign-in-alt"></i></i>Iniciar sesión</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../assets/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Más de 300 horas con posibilidad de permanencia</h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="{{ url('register') }}"><i class="fas fa-user-plus"></i></i>Únete</a>
                                <a class="btn" href="{{ url('login') }}"><i class="fa fa-sign-in-alt"></i></i>Iniciar sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Start -->
        <div class="d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zI7mqYukYpM" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
        <!-- Video End -->
        
        
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row d-flex flex-wrap align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="fact-item">
                            <i class="far fa-building text-primary display-4 mb-2"></i>
                            <h2>Empresa</h2>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, illo. Deleniti totam eaque alias sint aliquid dolores temporibus cupiditate unde dolor, sequi ullam accusamus necessitatibus.</p>
                            <button class="btn-primary p-1 rounded"><a class="text-white" href="{{ url('register') }}">Acceder</a></button>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="fact-item">
                            <i class="fas fa-chalkboard-teacher text-primary display-4 mb-2"></i>
                            <h2>Profesor</h2>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, illo. Deleniti totam eaque alias sint aliquid dolores temporibus cupiditate unde dolor, sequi ullam accusamus necessitatibus.</p>
                            <button class="btn-primary p-1 rounded"><a class="text-white" href="{{ url('register') }}">Acceder</a></button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="fact-item">
                            <i class="fas fa-user-graduate text-primary display-4 mb-2"></i>
                            <h2>Alumno</h2>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, illo. Deleniti totam eaque alias sint aliquid dolores temporibus cupiditate unde dolor, sequi ullam accusamus necessitatibus.</p>
                            <button class="btn-primary p-1 rounded"><a class="text-white" href="{{ url('register') }}">Acceder</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->
        
        <!-- Search offer start -->
        <div class="search">
            <div class="container p-4">
                <h3 class="text-center">Buscar prácticas</h3>
                <div class="form-row mt-4 d-flex justify-content-center">
                    <div class="col-lg-7 col-md-5 mb-2 mb-md-0">
                        <input class="form-control form-control-lg" placeholder="Buscar oferta">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar</button>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- Search offer end -->
        


        <!-- Cities start -->
        <div class="cities mt-5">
            <div class="container">
                <h1>Ciudades más demandadas</h1>
                <div class="row mt-3">
                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card" >
                            <img class="card-img-top " src="../assets/img/madrid.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Madrid<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card" >
                            <img class="card-img-top" src="../assets/img/barcelona.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Barcelona<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/valencia.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Valencia<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/bilbao.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Bilbao<a></h5>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Cities end-->

        <!-- Sectors start -->
        <div class="sectors mt-5">
            <div class="container">
                <h1>Sectores con más oportunidades</h1>
                <div class="row mt-3">
                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card" >
                            <img class="card-img-top " src="../assets/img/informatica.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Informática<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card" >
                            <img class="card-img-top" src="../assets/img/sanidad.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Sanidad<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/marketing.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Marketing<a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/hosteleria.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><a href="#">Hosteleria<a></h5>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Sectors end -->

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <h1>Nuestros alumnos</h1>
                <div class="row mt-4 mt-5">
                    <div class="mt-4 text-center col-lg-4 col-sm-12">
                        <img class="mb-4" style="width: 220px; height: 200px; display: inline-block; border-radius: 50%" src="../assets/img/persona_1.jpg" alt="persona 1">
                        <blockquote class="blockquote text-center display-2 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam commodi unde maxime iusto veritatis optio a necessitatibus</blockquote>
                        <footer class="blockquote-footer">Nombre 1</footer>
                    </div>

                    <div class="mt-4 text-center col-lg-4 col-sm-12">
                        <img class="mb-4" style="width: 220px; height: 200px; display: inline-block; border-radius: 50%" src="../assets/img/persona_2.jpg" alt="persona2">
                        <blockquote class="blockquote text-center display-2 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam commodi unde maxime iusto veritatis optio a necessitatibus</blockquote>
                        <footer class="blockquote-footer">Nombre 2</footer>
                    </div>

                    <div class="mt-4 text-center col-lg-4 col-sm-12">
                        <img class="mb-4" style="width: 220px; height: 200px; display: inline-block; border-radius: 50%" src="../assets/img/persona_3.jpg" alt="persona3">
                        <blockquote class="blockquote text-center display-2 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam commodi unde maxime iusto veritatis optio a necessitatibus</blockquote>
                        <footer class="blockquote-footer">Nombre 3</footer>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Los Krunkers</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By Krunkers Team</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/lib/easing/easing.min.js"></script>
        <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../assets/lib/waypoints/waypoints.min.js"></script>
        <script src="../assets/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="../assets/mail/jqBootstrapValidation.min.js"></script>
        <script src="../assets/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
