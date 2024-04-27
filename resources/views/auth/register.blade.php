@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <h2>Masuk atau Daftar</h2>
            <p>Dapatkan informasi terbaru seputar pasar Indonesia, standar
                internasional, dan transaksi pribadi dalam satu akun. Pantau
                kebutuhan Anda dengan lebih mudah bersama ACTGROW.</p>
        </div>
        <div class="col-md-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#daftarpetani">
                            <span>Daftar Sebagai Petani</span>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#daftarlembaga">
                <span>Daftar Sebagai Lembaga</span>
            </button>
        </div>
    </div>

</div>
<div class="modal modal-video fade" id="daftarpetani" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Daftar Sebagai Petani</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="POST">
                    @csrf <!-- This is for Laravel CSRF protection -->
                    
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name"><br>
            
                    <label for="name">Email:</label>
                    <input type="text" id="email" name="email"><br>

                    <label for="name">Password:</label>
                    <input type="text" id="password" name="password"><br>

                    <label for="name">Jenis Petani:</label>
                    <input type="text" id="jenis_petani" name="jenis_petani"><br>

                    <label for="name">Alamat:</label>
                    <input type="text" id="alamat" name="alamat"><br>
                    
                    <input type="text" id="role" name="role" hidden value="petani"><br>
                    <button type="submit">Simpan</button>
            
                    
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
<div class="modal modal-video fade" id="daftarlembaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Dartar Sebagai Lembaga</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="POST">
                    @csrf <!-- This is for Laravel CSRF protection -->
                    
                    <label for="name">Nama Lembaga:</label>
                    <input type="text" id="name" name="name"><br>
            
                    <label for="name">Email:</label>
                    <input type="text" id="email" name="email"><br>

                    <label for="name">Password:</label>
                    <input type="text" id="password" name="password"><br>

                    <label for="name">Tahun Berdiri:</label>
                    <input type="text" id="tahun_berdiri" name="tahun_berdiri"><br>

                    <label for="name">Sertifikasi:</label>
                    <input type="text" id="sertifikasi" name="sertifikasi"><br>

                    <label for="name">No HP:</label>
                    <input type="text" id="no_hp" name="no_hp"><br>

                    <label for="name">Alamat:</label>
                    <input type="text" id="alamat" name="alamat"><br>
                    
                    <input type="text" id="role" name="role" hidden value="lembaga"><br>
                    <button type="submit">Simpan</button>
            
                    
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection