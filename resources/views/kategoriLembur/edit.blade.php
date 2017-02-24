@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> KATEGORI LEMBUR </h2></div>

	            	<div class="panel-body">
						{!! Form::model($lembur, ['method' => 'PATCH', 'route' => ['kategorilembur.update', $lembur->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $lembur->id }}">

						<div class="form-group">
							{!! Form::label('Kode', 'Kode lembur') !!}
							<input type="text" name="Kode_lembur" class="form-control" value="{{ $lembur->Kode_lembur }}" required>
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
							{!! Form::label('uang', 'Besaran Uang') !!}
							<input type="text" name="Besaran_uang" class="form-control" value="{{ $lembur->Besaran_uang }}" required>
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