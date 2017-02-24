@extends('layouts.template')
@section('content')

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-10 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> PEGAWAI </h2></center></div>

	            	<div class="panel-body">
					<a href="{{ url('/pegawai/create') }}" class="btn btn-success"> Tambah Pegawai </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> NIP </th>
							<th> User </th>
							<th> Jabatan </th>
							<th> Golongan </th>
							<th> Photo </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							@foreach($pegawaii as $data)
							<tr>
								<td> {{ $No++ }} </td>
								<td> {{ $data->Nip }} </td>
								<td> {{ $data->User->name }} </td>
								<td> {{ $data->Jabatan->Nama_jabatan }} </td>
								<td> {{ $data->Golongan->Nama_golongan }} </td>
								<td> <img src="{{asset('/image/'. $data->Photo) }}" height="100px" width="100px"> </td>
								<td> <a href="{{url('pegawai',$data->id)}}" class="btn btn-primary">Read</a></td>
								<td> <a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning"> Update </a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['pegawai.destroy', $data->id]]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop