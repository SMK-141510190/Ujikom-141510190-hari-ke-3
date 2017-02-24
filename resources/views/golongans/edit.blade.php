@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> GOLONGAN </h2></div>

	            	<div class="panel-body">
						{!! Form::model($golong, ['method' => 'PATCH', 'route' => ['golongan.update', $golong->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $golong->id }}">

						<div class="form-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
							{!! Form::label('Kode', 'Kode golongan') !!}
							<input id="Kode_golongan" type="text" class="form-control" name="Kode_golongan" value="{{ $golong->Kode_golongan }}" required autofocus>

							@if ($errors->has('Kode_golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_golongan') }}</strong>
                                </span>
                            @endif
						</div>

						<div class="form-group">
							{!! Form::label('Nama', 'Nama golongan') !!}
							<input type="text" name="Nama_golongan" class="form-control" value="{{ $golong->Nama_golongan }}" required>
						</div>
						<div class="form-group">
							{!! Form::label('uang', 'Besaran Uang') !!}
							<input type="text" name="Besaran_uang" class="form-control" value="{{ $golong->Besaran_uang }}" required>
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