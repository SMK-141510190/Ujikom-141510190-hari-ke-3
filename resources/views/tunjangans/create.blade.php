@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> TUNJANGAN </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'tunjangan']) !!}
						

						<div class="form-group{{ $errors->has('Kode_tunjangan') ? ' has-error' : '' }}">
							{!! Form::label('kode', 'Kode Tunjangan:') !!}
							<input type="text" name="Kode_tunjangan" class="form-control" required>
							@if ($errors->has('Kode_tunjangan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_tunjangan') }}</strong>
                                </span>
                            @endif 
						</div>

						<div class="form-group">
						{!! Form::label('jab', 'Nama Jabatan:') !!}
						<select class="form-control" name="jabatan_id">
							<option>-- Pilih Jabatan --</option>
							@foreach($jab as $data)
								<option value="{{ $data->id }}"> {{ $data->Nama_jabatan }} </option>
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
							{!! Form::label('Statusambil', 'Status Perkawinan:') !!}
							<select class="form-control" name="Status">
								<option>Sudah</option>
								<option>Belum</option>
							</select> 
						</div>

						<div class="form-group">
							{!! Form::label('anak', 'Jumlah Anak:') !!}
							<input type="text" name="Jumlah_anak" class="form-control"> 
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