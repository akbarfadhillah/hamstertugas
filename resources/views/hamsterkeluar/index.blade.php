@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><br>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Data Hamster Terjual
                        <div>
                        <a href="{{ route('hamsterkeluar.create') }}" class="float-right btn btn-success btn-floating"> Tambah Penjualan Hamster</a>
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Hamster</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($hamsterkeluar as $hamsterkeluars)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{$hamsterkeluars->hamsterstock->jenis}}</td>
                                                    <td>{{$hamsterkeluars->tanggal}}</td>
                                                    <td>{{$hamsterkeluars->jumlah}}</td>
                                                    <td>
                                                    
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection