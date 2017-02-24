@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> JABATAN </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'jabatan']) !!}
						

						<div class="form-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
							{!! Form::label('Kode', 'Kode Jabatan:') !!}
							<input type="text" name="Kode_jabatan" class="form-control" required>

							@if ($errors->has('Kode_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_jabatan') }}</strong>
                                </span>
                            @endif 
						</div>

						<div class="form-group{{ $errors->has('Nama_jabatan') ? ' has-error' : '' }}">
							{!! Form::label('Nama', 'Nama Jabatan:') !!}
							<input type="text" name="Nama_jabatan" class="form-control" required>

							@if ($errors->has('Nama_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Nama_jabatan') }}</strong>
                                </span>
                            @endif 
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