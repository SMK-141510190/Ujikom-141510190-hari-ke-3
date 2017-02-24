@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> TUNJANGAN PEGAWAI </h2></div>

	            	<div class="panel-body">
						{!! Form::model($tunjangpegawai, ['method' => 'PATCH', 'route' => ['tpegawai.update', $tunjangpegawai->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $tunjangpegawai->id }}">
						

						<div class="form-group">
						{!! Form::label('kode', 'Kode Tunjangan:') !!}
						<select class="form-control" name="Kode_tunjangan_id">
							<option value="{{ $tpselect->id }}" selected>{{ $tpselect->Kode_tunjangan }}</option>
							@foreach($tunjang as $data)
								<option value="{{ $data->id }}"> {{ $data->Kode_tunjangan }}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
						{!! Form::label('pegawai', 'Nama Pegawai:') !!}
						<select class="form-control" name="pegawai_id">
							<option value="{{ $pselect->id }}" selected>{{ $pselect->User->name }} || {{ $pselect->Jabatan->Nama_jabatan }} || {{ $pselect->Golongan->Nama_golongan }}</option>
							@foreach($pegawai as $data)
								<option value="{{ $data->id }}"> {{ $data->User->name }} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }} </option>
							@endforeach
						</select>
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