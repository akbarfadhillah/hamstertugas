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
                    <div class="card-header">Data Hamster Baru
                        <div>
                        <a href="{{ route('hamstermasuk.create') }}" class="float-right btn btn-success btn-floating"> Tambah Stok Hamster Baru</a>
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
                                                @foreach($hamstermasuk as $hamstermasuks)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{$hamstermasuks->hamsterstock->jenis}}</td>
                                                    <td>{{$hamstermasuks->tanggal}}</td>
                                                    <td>{{$hamstermasuks->jumlah}}</td>
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