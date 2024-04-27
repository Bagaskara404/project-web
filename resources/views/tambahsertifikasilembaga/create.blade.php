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
    <form action="{{ route('tambahsertifikasilembaga.upload') }}" method="POST">
        @csrf <!-- This is for Laravel CSRF protection -->

        <label for="nama_sertifikasi">Nama Sertifikasi</label>
        <input type="text" id="nama_sertifikasi" name="nama_sertifikasi"><br>

        <label for="dokumen_lembaga">Pilih File ZIP atau RAR:</label>
        <input type="file" id="dokumen_lembaga" name="dokumen_lembaga" ><br>
        <button type="submit">Simpan</button>

        <a class="btn btn-secondary" href="{{route('tambahsertifikasilembaga.index')}}">Batal</a>
        
    </form>

</div>
@endsection
