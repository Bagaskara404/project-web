@extends('layout')

@section('content')
<style>
    .centered-text {
        text-align: center;
        margin-top: 50px; /* Atur margin atas sesuai kebutuhan */
    }
</style>

<div class="centered-text" style="padding:30px">
    <h2>Sertifikasi SNI (Standar Nasional Indonesia)</h2>
    <i class="fas fa-file-alt fa-7x"></i><br> <!-- Font Awesome icon for file -->
    <a href="{{route('tambahsertifikasilembaga.create')}}"><button class="btn btn-primary py-2" style="margin:30px">Ubah</button></a> 
    <a href="{{route('tambahsertifikasilembaga.create')}}"><button class="btn btn-primary py-2">Tambah Sertifikasi</button></a>
    <a href="{{route('tambahsertifikasilembaga.show')}}"><button class="btn btn-primary py-2">Permintaan Sertifikasi</button></a>

</div>


@endsection
