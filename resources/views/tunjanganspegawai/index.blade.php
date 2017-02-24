@extends('layouts.template')
@section('content')

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-10 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> TUNJANGAN PEGAWAI </h2></center></div>

	            	<div class="panel-body">
					<a href="{{ url('/tpegawai/create') }}" class="btn btn-success"> Tambah Tunjangan Pegawai </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Kode Tunjangan </th>
							<th> Nama Pegawai </th>
							<th> Jabatan </th>
							<th> Golongan </th>
							<th> Besar Uang </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							@foreach($tunjangpegawai as $data)
							<tr>
								<td> {{ $No++ }} </td>
								<td> {{ $data->Tunjangans->Kode_tunjangan }} </td>
								<td> {{ $data->Pegawai->User->name }} </td>
								<td> {{ $data->Pegawai->Jabatan->Nama_jabatan }} </td>
								<td> {{ $data->Pegawai->Golongan->Nama_golongan }} </td>
								<td> Rp. {{ number_format($data->Tunjangans->Besaran_uang, '2', ',', '.') }} </td>
								<td> <a href="{{ route('tpegawai.edit', $data->id) }}" class="btn btn-warning"> Update </a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['tpegawai.destroy', $data->id]]) !!}
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