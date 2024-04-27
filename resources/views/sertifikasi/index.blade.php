@extends('layout')

@section('content')

<div class="container-fluid">
        
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/header.jpg')}}">
        </div>
       
    </div>
</div>

<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-6">
            <h3>Layanan Sertifikasi PT ActGrow</h3>
        </div>
        <div class="col-lg-6">
            <p>Layanan PT  ActGrow sebagai lembaga sertifikasi membantu perusahaan untuk
                membuktikan komitmen terhadap kualitas, lingkungan, keselamatan dan kesehatan kerja,
                tanggung jawab sosial serta ketentuan nasional dan internasional.</p>
            <br></br>
            <p>Dengan cakupan sertifikasi yang luas dan kemampuan untuk memperoleh akreditasi
                secara nasional, PT ActGrow menyediakan jasa sertifikasi yang meliputi sertifikasi laik
                fungsi, sertifikasi GMP, sertifikasi SNI, Gas Rumah Kaca, GMP, dan sertifikasi halal.</p>
            
        </div>
    </div>
</div>
<div class="container-fluid2" style="margin:auto; padding:10mm">
    <h3>Produk Sertifikasi SDS Indonesia</h3>
    <hr>
    <p>SNI ORGANIK 6729:2016</p>
    <p>UEBT</p> 
    <p>ISPO</p>     
    <p>Organik Uni Eropa</p> 
    <p>Organik Amerika Serikat NOP-USDA</p>
    <p>Organik Jepang JAS</p>
    <p>Sertifikasi JIPO</p>
    <p>Organic Europe</p>
    <div class="row justify-content-end">
        <div class="col-auto">
            <a class="btn btn-primary py-2" href="{{route('tambahsertifikasilembaga.index')}}">Tambahan Sertifikasi</a>
        </div>
    </div>

</div>




    
@endsection