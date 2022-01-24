@extends('layouts.master')
@section('content')

<br><br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header"><b>Masukan Stok Baru Hamster</b></h5>
			<form action="{{ route('hamstermasuk.store') }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<div class="form-group {{ $errors->has('jenis') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Hamster</label>	
			  			<input type="text" name="jenis" class="form-control"  required>
			  			@if ($errors->has('jenis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('banyak') ? ' has-error' : '' }}">
			  			<label class="control-label">Banyak Hamster</label>	
			  			<input type="text" name="banyak" class="form-control"  required>
			  			@if ($errors->has('banyak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('banyak') }}</strong>
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