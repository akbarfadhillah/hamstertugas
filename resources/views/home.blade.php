@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header">Selamat Datang , Akbar!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kamu Telah Login!
                </div>
                <br>
                <br>
                <li class="user-header">
                    <img src="{{ ('hamster6.jpg ') }}">
                <br>
                <br>
                <div class="card-body">Hamster Mini Rusia Campbel pertama kali ditemukan pada tahun 1905 oleh Thomas Campbell dan yang selanjutnya memberikan hamster ini kepada Gamalyea Institute di Moskow. 
                    Pada tahun 1963-1964, Hamster Campbel di import ke Inggris oleh Holloway College London dan juga dikirimkan ke London Zoological Society pada tahun 1963. Dan pada tahun 1968 hamster Campbel 
                    berhasil dikembang-biakan dalam penangkaran di Inggris. Hamster Campbel juga digunakan untuk keperluan laboratorium dan pada tahun 1973-1974 sepasang Hamster Campbel di dapat dari Kebun 
                    Binatang London oleh sekelompok anggota dari penggemar hamster dan  pada tahun 1976 kelompok penggemar hamster itu memberikan beberapa ekor Hamster Campbel lagi kepada Kebun Binatang London. 
                    Namun, Hamster Campbel tidak begitu popular sebagai hewan peliharaan sampai pada awal tahun 1980 dan mulai sejak itu Hamster Campbel banyak ditemukan di petshop-petshop.</div>

            </div>
        </div>
    </div>
</div>
@endsection
