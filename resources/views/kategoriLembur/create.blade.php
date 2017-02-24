@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> KATEGORI LEMBUR </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'kategorilembur']) !!}
						

						<div class="form-group{{ $errors->has('Kode_lembur') ? ' has-error' : '' }}">
							{!! Form::label('Kode', 'Kode Lembur:') !!}
							<input type="text" name="Kode_lembur" class="form-control" required>
							@if ($errors->has('Kode_lembur'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_lembur') }}</strong>
                                </span>
                            @endif
						</div>

						<div class="form-group">
						{!! Form::label('jab', 'Nama Jabatan:') !!}
						<select class="form-control" name="jabatan_id">
							<option>-- Pilih Jabatan --</option>
							@foreach($jab as $data)
								<option value="{{ $data->id }}"> {{ $data->Nama_jabatan }}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
						{!! Form::label('gol', 'Nama Golongan:') !!}
						<select class="form-control" name="golongan_id">
							<option>-- Pilih Golongan --</option>
							@foreach($gol as $data)
								<option value="{{ $data->id }}"> {{ $data->Nama_golongan}}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
							{!! Form::label('uang', 'Besaran Uang:') !!}
							<input type="text" name="Besaran_uang" class="form-control" required> 
						</div>
						<div class="form-group">
							{!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop