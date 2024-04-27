<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Actgrow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('TeaHouse-1.0.0/img/favicon.ico')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Qc9wVgk0R+9peSq6K+TmfPbMRxVsL6w8O2Brp5Av2qYmVgeV+fbDVeLcXAmzTclC7dKfdVrHZW2f7KuEiUp7vw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('TeaHouse-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('TeaHouse-1.0.0/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- Header -->
<header class="container-fluid1">
    <section >
        <div class="container-fluid ">
            <div class="wrapper">
                <div class="header ">
                    <div class="header-section">   
                        <p>email:customer.service@actgrow.com</p>
                    </div>
                    <div class="flex justify-end header-section">
                        <a class="btn btn-primary py-2" href="{{route('register')}}">Daftar</a>
                        <a class="btn btn-primary py-2" href="{{route('login')}}"> Masuk</a>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf <!-- This is for Laravel CSRF protection -->
                        </form>
                        
                        <a class="btn btn-primary py-2" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Keluar</a>
                        
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
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0 ">
                <a href="index.html" class="navbar-brand"><img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/actgrow.jpg')}}" alt="Logo" width="70px" height="70px">
                    
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('welcome')}}" class="nav-item nav-link active">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="{{route('profillembaga1.index')}}" class="dropdown-item">Lembaga Sertifikasi</a>
                                <a href="{{route('sertifikasi.index')}}" class="dropdown-item">Sertifikasi</a>
                                
                            </div>
                        </div>
        
                        <a href="{{route('kontak.index')}}" class="nav-item nav-link">Kontak</a>
                        <a href="" class="nav-item-link"></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="{{route('artikel.index')}}" class="dropdown-item">Artikel</a>
                                <a href="{{route('galeri.index')}}" class="dropdown-item">Galeri</a>
                                
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



    
    <!-- Navbar End -->
    <div class="container-fluid">
        
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/header.jpg')}}">
                </div>
               
            </div>
    </div>

    <!-- Carousel Start -->
    
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="row">
        <div class="col-md-6">
            <h1>Penjelasan Sertifikasi Organik</h1>
        </div>
    
        <div class="col-md-6">
            <p>Indonesia melalui Badan Standarisasi Nasional,telah menerbitkan standar yang dapat dijadikan acuan penerapan sistem pengolahan secara organik(SNI 6729:2016 Sistem Pertanian Organik). Standar ini mengacu kepada banyak standar.</p>
            <br></br>
            <br></br>
            <p>PT Actgrow</p>
        </div>
    </div>

    <div class="container-fluid2">
        <div class="row">
            
            <div class="col-lg-6" style="margin:20px" >
                <h4>Lembaga Yang Bekerja Sama Dengan PT ACTGROW</h4>
                <p>Lembaga SDS <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                <p>Lembaga Sertifikasi B <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                <p>Lembaga Sertifikasi C <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                <p>Lembaga Sertifikasi D <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                <p>Lembaga Sertifikasi E <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            </div>
            </div>
            
            <div class="col-lg-6" style="margin: 20px">
                <div class="row">
                    <div class="col-md-4" >
                        <h4>Produk Sertifikasi PT ACTGROW</h4>
                        <p>SNI ORGANIK 6729:2016</p>
                        <p>UEBT</p> 
                        <p>ISPO</p>     
                        <p>Organik Uni Eropa</p> 
                        <p>Organik Amerika Serikat NOP-USDA</p>
                        <p>Organik Jepang JAS</p>
                        <p>Sertifikasi JIPO</p>
                        <p>Organic Europe</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Informasi Tambahan</h4>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Products Start -->
    
    <div class="container-xxl1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white">Tertarik Dengan Jasa Kami??</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary py-2 me-2">SignUp</button>
                        <p class="text-white my-auto">atau</p>
                        <button type="button" class="btn btn-primary py-2 ms-2 ">Login</button>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <div class="container-fluid bg-dark footer  py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/actgrow.jpg')}}" alt="Logo" width="70px" height="70px">
                    <p>PT Actgrow menyajikan berbagai layanan dan jasa untuk memajukan nilai ekonomi sektor bisnis Indonesia</p>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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