@extends('layouts.template')
@section('content')

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-10 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> LEMBUR PEGAWAI </h2></center></div>

	            	<div class="panel-body">
					<a href="{{ url('/lemburpegawai/create') }}" class="btn btn-success"> Tambah Lembur Pegawai </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Kode Lembur</th>
							<th> Nama Pegawai </th>
							<th> Jabatan </th>
							<th> Golongan </th>
							<th> Jumlah Jam </th>
							<th> Besar Uang lembur </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							@foreach($lmbpegawai as $data)
							<tr>
								<td> {{ $No++ }} </td>
								<td> {{ $data->Kategori_lembur->Kode_lembur }} </td>
								<td> {{ $data->Pegawai->User->name }} </td>
								<td> {{ $data->Pegawai->Jabatan->Nama_jabatan }} </td>
								<td> {{ $data->Pegawai->Golongan->Nama_golongan }} </td>
								<td> {{ $data->Jumlah_jam }} </td>
								<td> Rp. {{ number_format($data->Jumlah_jam*$data->Kategori_lembur->Besaran_uang, '2', ',', '.') }} </td>
								<td> <a href="{{ route('lemburpegawai.edit', $data->id) }}" class="btn btn-warning"> Update </a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['lemburpegawai.destroy', $data->id]]) !!}
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