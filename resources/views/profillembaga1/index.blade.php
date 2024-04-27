@extends('layout')

@section('content')

<div class="container-fluid">
        
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/header.jpg')}}">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Lembaga Sertifikasi PT ActGrow</h2>
            </div>
            <div class="col-md-8">
                <p>PT  ActGrow menyediakan lembaga sertifikasi yang berkompeten dan dapat membantu perusahaan untuk
                    membuktikan komitmen terhadap kualitas, lingkungan, keselamatan dan kesehatan kerja,
                    tanggung jawab sosial serta ketentuan nasional dan internasional.</p><br>
                <p>Dengan cakupan sertifikasi yang luas dan kemampuan untuk memperoleh akreditasi
                    secara nasional, PT ActGrow menyediakan jasa sertifikasi yang meliputi sertifikasi laik
                    fungsi, sertifikasi GMP, sertifikasi SNI, Gas Rumah Kaca, GMP, dan sertifikasi halal.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl1 text-center" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="text-white">Ingin Order Layanan Sertifikasi?</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row text-center" style="padding: 30px">
            <h3>Produk Lemabaga Sertifikasi PT ActGrow</h3>
            <p>PT ACTGROW mendedikasikan diri untuk menjadi perusahaan kelas dunia yang dapat menjamin kepastian berusaha
                dengan objektif dan kredibel. Untuk mencapai tujuan tersebut, PT ACTGROW menyediakan berbagai jenis produk sertifikasi sebagai berikut.</p>
            <hr>
        </div>


    </div>

    <div class="container-fluid">
        <div class="col-md-6" style="margin:20px" >
            <h4>Lembaga Yang Bekerja Sama Dengan PT ACTGROW</h4>
            <a href="{{route('profillembaga.index')}}" style="color:black">
            <p>Lembaga SDS <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
            </a>
            <p>Lembaga Sertifikasi B <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi C <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi D <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi E <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
        </div>
        <div class="col-md-6" style="margin:20px">
            <p>Lembaga SDS <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi B <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi C <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi D <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p>Lembaga Sertifikasi E <br> <i class="far fa-comment"></i> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
        </div>
    </div>
</div>


    
    
</div>

@endsection
