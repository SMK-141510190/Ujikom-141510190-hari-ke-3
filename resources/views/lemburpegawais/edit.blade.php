@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> LEMBUR PEGAWAI </h2></div>

	            	<div class="panel-body">
						{!! Form::model($lmbpegawai, ['method' => 'PATCH', 'route' => ['lemburpegawai.update', $lmbpegawai->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $lmbpegawai->id }}">
						

						<div class="form-group">
						{!! Form::label('Nama', 'Nama:') !!}
						<select class="form-control" name="pegawai_id">
							<option value="{{ $pselect->id }}" selected>{{ $pselect->User->name }} || {{ $pselect->Jabatan->Nama_jabatan }} || {{ $pselect->Golongan->Nama_golongan }} </option>
							@foreach($pegawai as $data)
								<option value="{{ $data->id }}"> {{ $data->User->name }} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }} </option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
							{!! Form::label('jam', 'Jumlah Jam:') !!}
							<input type="text" name="Jumlah_jam" class="form-control" value="{{ $lmbpegawai->Jumlah_jam }}" required> 
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