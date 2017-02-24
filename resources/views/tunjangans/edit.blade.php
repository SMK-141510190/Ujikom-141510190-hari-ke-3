@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> TUNJANGAN </h2></div>

	            	<div class="panel-body">
						{!! Form::model($tunjang, ['method' => 'PATCH', 'route' => ['tunjangan.update', $tunjang->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $tunjang->id }}">
						
						<div class="form-group">
							{!! Form::label('kode', 'Kode Tunjangan:') !!}
							<input type="text" name="Kode_tunjangan" class="form-control" value="{{ $tunjang->Kode_tunjangan }}" required> 
						</div>

						<div class="form-group">
						{!! Form::label('jab', 'Nama Jabatan:') !!}
						<select class="form-control" name="jabatan_id">
							<option value="{{ $jselect->id }}" selected>{{ $jselect->Nama_jabatan }}</option>
							@foreach($jab as $data)
								<option value="{{ $data->id }}"> {{ $data->Nama_jabatan }}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
						{!! Form::label('gol', 'Nama Golongan:') !!}
						<select class="form-control" name="golongan_id">
							<option value="{{ $gselect->id }}" selected>{{ $gselect->Nama_golongan }}</option>
							@foreach($gol as $data)
								<option value="{{ $data->id }}"> {{ $data->Nama_golongan}}</option>
							@endforeach
						</select>
						</div>
						
						<div class="form-group">
							{!! Form::label('Status', 'Status Perkawinan:') !!}
							<select class="form-control" name="Status">
								<option>Sudah</option>
								<option>Belum</option>
							</select> 
						</div>

						<div class="form-group">
							{!! Form::label('anak', 'Jumlah Anak:') !!}
							<input type="text" name="Jumlah_anak" class="form-control" value="{{ $tunjang->Jumlah_anak }}"> 
						</div>

						<div class="form-group">
							{!! Form::label('uang', 'Besaran Uang:') !!}
							<input type="text" name="Besaran_uang" class="form-control" value="{{ $tunjang->Besaran_uang }}" required> 
						</div>

						<div class="form-group">
							{!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop