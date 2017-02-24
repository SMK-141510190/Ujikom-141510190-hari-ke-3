@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> PENGGAJIAN </h2></div>

	            	<div class="panel-body">
						{!! Form::open(['url' => 'penggajian']) !!}


						<div class="form-group">
						{!! Form::label('pegawai', 'Nama Pegawai') !!}
						<span class="required">*</span>
							<select class="form-control" name="tunjangan_pegawai_id">
								<option>-- Pilih Pegawai --</option>
								@foreach($tunjangan as $data)
									<option value="{{$data->id}}">{{$data->Pegawai->Nip}}&nbsp;|&nbsp;{{$data->Pegawai->User->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							{!! Form::label('Statusambil', 'Status Pengambilan') !!}
							<span class="required">*</span>
							<select class="form-control" name="Status_pengambilan">
								<option value="0">Sudah</option>
								<option value="1">Belum</option>
							</select> 
						</div>


						<div class="col-md-6 col-sm-6 col-xs-12">
					     <span class="help-block">
					           {{$errors->first('tunjangan_pegawai_id')}}
					     </span>
					             <div>
					                 @if(isset($error))
					                       Check Lagi Gaji Sudah Ada
					                 @endif
					             </div>
					    </div>

						<div class="form-group">
							{!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop