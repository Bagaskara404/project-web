@extends('layout')

@section('content')

<div class="container-fluid">
        
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid" src="{{asset('TeaHouse-1.0.0/img/header.jpg')}}">
        </div>
       
    </div>
</div>

<div class="container-fluid" style="margin:30px">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 20px">
            <h3>SDS INDONESIA (Sustainable Development Services)</h3>
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>Jl. Srikoyo No. 117, Patrang, Jember 68111, Indonesia<br>
            <i class="fas fa-phone"></i> +628113431900 <br>
            <i class="fas fa-link"></i> Htps.linkakreditasi/lembaga/SDSINDONESIA.com
        </div>
        <div class="row justify-content-end" >
            <div class="col-auto">
                <a class="btn btn-primary py-2" href="{{route('sds.index')}}">Tambahan Sertifikasi</a>
            </div>
        </div>
    </div>
</div>  

<div class="container-fluid2" style="margin-bottom: 0px">

    <div class="row">
        <div class="col-md-6">
            <h3>Informasi Tambahan</h3>
            <p>SDS adalah lembaga sertifikasi terakreditasi ISO/IEC 17065 untuk pertanian organik dan standard program berkelanjutan.</p>
            <br></br>
            <p>PT ACTGROW memiliki kompetensi serta pengalaman sebagai Lembaga Penyedia Jasa Penyusun EBA.</p>
        </div>  
        <div class="col-md-6">
            <h3>Produk Sertifikasi Lembaga A</h3>
            <p>SNI ORGANIK 6729:2016</p>
            <p>UEBT</p> 
            <p>ISPO</p>     
            <p>Organik Uni Eropa</p> 
            <p>Organik Amerika Serikat NOP-USDA</p>
            <p>Organik Jepang JAS</p>
            <p>Sertifikasi JIPO</p>
            <p>Organic Europe</p>
            <p></p>
        </div>
    </div>
    
    
    
</div>

@endsection
