@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> LEMBUR PEGAWAI </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'lemburpegawai']) !!}
						

						<div class="form-group">
						{!! Form::label('Nama', 'Nama:') !!}
						<select class="form-control" name="pegawai_id">
							@foreach($pegawai as $data)
								<option value="{{ $data->id }}"> {{ $data->User->name }} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }} </option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
							{!! Form::label('jam', 'Jumlah Jam:') !!}
							<input type="text" name="Jumlah_jam" class="form-control" required> 
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