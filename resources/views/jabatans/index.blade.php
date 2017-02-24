@extends('layouts.template')
@section('content')

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-10 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> JABATAN </h2></center></div>
	            	<div class="panel-body">
					<a href="{{ url('/jabatan/create') }}" class="btn btn-success"> Tambah Jabatan </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Kode Jabatan </th>
							<th> Nama Jabatan </th>
							<th> Besaran Uang </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							@foreach($jabat as $data)
							<tr>
								<td> {{ $No++ }} </td>
								<td> {{ $data->Kode_jabatan }} </td>
								<td> {{ $data->Nama_jabatan }} </td>
								<td> Rp. {{ number_format($data->Besaran_uang, '2', ',', '.') }} </td>
								<td> <a href="{{ route('jabatan.edit', $data->id) }}" class="btn btn-warning"> Update </a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['jabatan.destroy', $data->id]]) !!}
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