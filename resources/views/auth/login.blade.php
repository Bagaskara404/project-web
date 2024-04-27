@extends('layout')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-7 text-center">
            <h2>Masuk atau Daftar</h2>
            <p>Dapatkan informasi terbaru seputar pasar Indonesia, standar
                internasional, dan transaksi pribadi dalam satu akun. Pantau
                kebutuhan Anda dengan lebih mudah bersama ACTGROW.</p>
        </div>
        <div class="col-md-5 mt-20 mb-20 py-5">
            <div class="wrapper">
                <form method="POST" action="{{route('login')}}">
                    @csrf

                    <label for="">Masuk Sebagai:</label>
                        <select id="" name="" >
                            <option value=" ">Pelanggan</option>
                            <option value="">Lembaga</option>
                        </select><br>
                    
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Email"><br>
                    

                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Password"><br>
                
                    <button type="submit">Masuk</button>
                    


                </form>
            </div>
            
        </div>
    </div>

</div>
    
@endsection