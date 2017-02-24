@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> JABATAN </h2></div>

	            	<div class="panel-body">
						{!! Form::model($jabat, ['method' => 'PATCH', 'route' => ['jabatan.update', $jabat->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $jabat->id }}">
						

						<div class="form-group">
							{!! Form::label('Kode', 'Kode Jabatan') !!}
							<input type="text" name="Kode_jabatan" class="form-control" value="{{ $jabat->Kode_jabatan }}" required>
						</div>
						<div class="form-group">
							{!! Form::label('Nama', 'Nama Jabatan') !!}
							<input type="text" name="Nama_jabatan" class="form-control" value="{{ $jabat->Nama_jabatan }}" required>
						</div>
						<div class="form-group">
							{!! Form::label('uang', 'Besaran Uang') !!}
							<input type="text" name="Besaran_uang" class="form-control" value="{{ $jabat->Besaran_uang }}" required>
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