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
                    <div class="card-header">Data Stok Hamster Yang Ready!
                        <div>
                        <a href="{{ route('hamster.create') }}" class="float-right btn btn-success btn-floating"> Tambah Stock Hamster yang Ready</a>
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
                                                    <th>Stok Hamster</th>
                                                    <th>Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($hamster as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{$data->jenis}}</td>
                                                    <td>{{$data->stok}}</td>
                                                    <td>{{$data->harga}}</td>
                                                    <td>
                                                    <form action="{{ route('hamster.destroy', $data->id) }}"method="POST">
                                                        @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data?')">Delete</button>
                                                    </form>
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