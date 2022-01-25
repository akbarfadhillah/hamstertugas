@extends('layouts.master')
@section('content')

<br><br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header"><b>Tambah Data Vape</b></h5>
			<form action="{{ route('hamstermasukk.store') }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlah</label>	
			  			<input type="number" name="jumlah" class="form-control"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('hamster_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Hamster</label>	
			  			<select name="hamster_id" class="form-control">
						  <option>Pilihan</option>
							@foreach($hamsterstock as $data)
			  				<option value="{{ $data->id }}">{{ $data->jenis}}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('hamster_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hamster_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="button submit" class="btn btn-primary btn-rounded btn-floating">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection