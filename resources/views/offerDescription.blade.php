<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Los krunkers - Modificar oferta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap"
        rel="stylesheet">

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
                        <a href="index.html" class="nav-item nav-link">Inicio</a>
                        <a href="about.html" class="nav-item nav-link active">Mi perfil</a>
                        <a href="service.html" class="nav-item nav-link">Mis candidaturas</a>
                        <a href="feature.html" class="nav-item nav-link">Ajustes</a>
                        <li><img src="../assets/img/fotoPerfil.jpg" style="width: 30px;height: 30px;"></a></li>
                    </div>
                </div>

            </div>
        </div>
        <!-- Nav Bar End -->

        <!--Empty div-->
        <div class=" mt-3 pt-3">
            <div class="container">
                
            </div>
        </div>

    <section class=" container mt-3 p-5">

        <!-- Description offer start -->
        <div class="container">
            @forelse ($offers as $offer)
                <div class="col col-lg-12 col-sm-12 border p-3">
                    <div style="display: flex; align-items: center; justify-content: left;">
                        <img src="{{ $offer->companyPhoto }}" style="width: 10%;">  
                    
                        <h1 class="ml-5">
                            {{ $offer->name }}
                        </h1>
                    </div>
                    <br>
                    <p style="color: black">
                    Nombre empresa: {{ $offer->c_name }} <br>
                    Area: {{ $offer->area }} <br>
                    Ciudad: {{ $offer->city }} <br>
                    Tipo de jornada: {{ $offer->typeWorkday }} <br>
                    Fecha de publicación: {{ $offer->created_at }} <br>
                    Estado de la oferta: {{ $offer->status }}
                    </p>
                    <br>
                    <div>
                        <h5>Requisitos</h5>
                        <br>
                        <p>
                            {{ $offer->requirements }}
                        </p>
                        <br>
                        <h5>Descripción oferta</h5>
                        <br>
                        <p>
                            {{ $offer->description }}
                        </p>
                    </div>
                    <a href="#" class="btn btn-primary">Inscribirse</a>
                </div>
            @empty
                <p>No se ha encontrado información sobre la oferta seleccionada</p>
            @endforelse
            <br><br>
            <h3>Ofertas relacionadas</h3>
            <br><br>
            
        </div>
        <!-- Description offer end -->

    </section>

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
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu
                                placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
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