<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Actgrow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('TeaHouse-1.0.0/img/favicon.ico') }}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Qc9wVgk0R+9peSq6K+TmfPbMRxVsL6w8O2Brp5Av2qYmVgeV+fbDVeLcXAmzTclC7dKfdVrHZW2f7KuEiUp7vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TeaHouse-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('TeaHouse-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>



    <!-- Header -->
    <header class="container-fluid1">
        <section>
            <div class="container-fluid justify-content-md-end">
                <div class="wrapper">
                    <div class="header justify-content-between">
                        <div class="header-section">
                            <p>email:customer.service@actgrow.com</p>
                        </div>
                        <div class="header-section">
                            <a class="btn btn-primary py-2" href="{{route('register')}}">Daftar</a>
                        <a class="btn btn-primary py-2" href="{{route('login')}}"> Masuk</a>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </header>


    <!-- Navbar Start -->

    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <div class="">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                    <a href="index.html" class="navbar-brand">
                        <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/actgrow.jpg')}}" alt="Logo" width="70px" height="70px">
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{route('welcome')}}" class="nav-item nav-link active">Beranda</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                                <div class="dropdown-menu bg-light rounded-0 m-0">
                                    <a href="{{ route('profillembaga1.index') }}" class="dropdown-item">Lembaga Sertfikasi</a>
                                    <a href="{{ route('sertifikasi.index') }}" class="dropdown-item">Sertifikasi</a>
                                    

                                </div>
                            </div>

                            <a href="{{ route('kontak.index') }}" class="nav-item nav-link">Kontak</a>
                            <a href="" class="nav-item-link"></a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                                <div class="dropdown-menu bg-light rounded-0 m-0">
                                    <a href="" class="{{route('artikel.index')}}">Artikel</a>
                                    <a href="{{ route('galeri.index') }}" class="dropdown-item">Galeri</a>

                                </div>
                            </div>
                        </div>
                        <div class="border-start ps-4 d-none d-lg-block">
                            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

  

        <!-- Products End -->


        <!-- Article Start -->

        <!-- Article End -->


        <!-- Video Start -->


        <!-- Video End -->


        <!-- Video Modal Start -->

        <!-- Video Modal End -->


        <!-- Store Start -->

        <!-- Store End -->


        <!-- Testimonial Start -->
        <!-- Contact Start -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark footer  wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <img class="img-fluid" src="{{ asset('TeaHouse-1.0.0/img/actgrow.jpg') }}" alt="Logo"
                                width="70px" height="70px">
                            <p>PT Actgrow menyajikan berbagai layanan dan jasa untuk memajukan nilai ekonomi sektor
                                bisnis Indonesia</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Berlangganan</h4>
                            <form>
                                <div class="position-relative w-100">
                                    <input class="form-control bg-white w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                    <button type="button" class="btn btn-primary w-100 py-2 mt-2 me-2">Berlangganan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Copyright Start -->
            <footer class="container-fluid copyright py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="fw-medium" href="#">Actgrow</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="d-flex justify-content-md-end">
                                <p class="me-3">Ikuti Sosial Media Kami</p>
                                <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            </div>
            <!-- Copyright End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                    class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>
