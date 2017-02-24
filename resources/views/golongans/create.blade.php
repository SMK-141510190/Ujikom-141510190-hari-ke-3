@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> GOLONGAN </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'golongan']) !!}
						

						<div class="form-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
							{!! Form::label('Kode', 'Kode Golongan:') !!}
							<input type="text" name="Kode_golongan" class="form-control" required> 
							@if ($errors->has('Kode_golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_golongan') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
							{!! Form::label('Nama', 'Nama Golongan:') !!}
							<input type="text" name="Nama_golongan" class="form-control" required> 
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