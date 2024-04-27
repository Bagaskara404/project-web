@extends('layout')

@section('content')
<style>
    .centered-text {
        text-align: center;
        margin-top: 50px; /* Atur margin atas sesuai kebutuhan */
    }
</style>

<div class="centered-text">
    <h2>Sertifikasi SNI (Standar Nasional Indonesia)</h2>
</div>

<div class="centered-text">
    <form action="{{route('uploadsds')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- This is for Laravel CSRF protection -->
        <label for="name">Nama:</label>
        <input type="text" id="nama_petani" name="nama_petani"><br>

        <label for="name">Nama Sertifikasi</label>
        <input type="text" id="nama_sertifikasi" name="nama_sertifikasi"><br>

        <label for="compressedFile">Pilih File ZIP atau RAR:</label>
        <input type="file" id="dokumen_petani" name="dokumen_petani" ><br>
        <button type="submit">Simpan</button>

        <a class="btn btn-secondary" href="javascript:history.back()">Batal</a>
        
    </form>

</div>
@endsection
