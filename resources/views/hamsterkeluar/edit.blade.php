@extends('layouts.master')
@section('content')
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card"><br><a href="{{ url()->previous() }}">&nbsp;&nbsp;&nbsp;&nbsp;Kembali</a>
			<h5 class="card-header"><b>Edit Stok Hamster</b></h5>
			<form action="{{ route('hamsterkeluar.update',$hamster->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">

					<div class="form-group {{ $errors->has('hamster_id') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Hamster</label>	
                        <select name="hamster_id" class="form-control">
                        <option>---</option>
                          @foreach($hamsterkeluar as $data)
                            <option value="{{ $data->id }}">{{ $data->jenis }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('hamster_id'))
                          <span class="help-block">
                              <strong>{{ $errors->first('hamster_id') }}</strong>
                          </span>
                      @endif
                    </div>

					<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
						<label class="control-label">jumlah</label>	
						<input type="number" name="jumlah" class="form-control"  required>
						@if ($errors->has('jumlah'))
						  <span class="help-block">
							  <strong>{{ $errors->first('jumlah') }}</strong>
						  </span>
					  @endif
					</div>

					<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
						<label class="control-label">tanggal</label>	
						<input type="date" name="tanggal" class="form-control"  required>
						@if ($errors->has('tanggal'))
						  <span class="help-block">
							  <strong>{{ $errors->first('tanggal') }}</strong>
						  </span>
					  @endif
					</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Selesai</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection