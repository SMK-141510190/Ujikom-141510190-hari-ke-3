@extends('layouts.template')
@section('content')

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> PENGGAJIAN </h2></center></div>

	            	<div class="panel-body">
					<a href="{{ url('/penggajian/create') }}" class="btn btn-success"> Tambah Penggajian </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Nama Pegawai </th>
							<th> Jabatan </th>
							<th> Golongan </th>
							<th> Tunjangan </th>
							<th> Jumlah Jam Lembur </th>
							<th> Jumlah Uang Lembur </th>
							<th> Gaji Pokok </th>
							<th> Total Gaji </th>
							<th> Tanggal Pengambilan </th>
							<th> Status Pengambilan </th>
							<th> Petugas Penerima </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							@foreach($gajian as $data)
							<tr>
								<td> {{ $No++ }} </td>
								<td> {{ $data->Tunjangan_pegawai->Pegawai->Users->name }} </td>
								<td> {{ $data->Tunjangan_pegawai->Pegawai->Jabatan->Nama_jabatan }} </td>
								<td> {{ $data->Tunjangan_pegawai->Pegawai->Golongan->Nama_golongan }} </td>
								<td> {{ $data->Tunjangan_pegawai->Tunjangans->Besaran_uang }} </td>
								<td> {{ $data->Jumlah_jam_lembur }} </td>
								<td> {{ $data->Jumlah_uang_lembur }} </td>
								<td> {{ $data->Gaji_pokok }} </td>
								<td> {{ $data->Total_gaji }} </td>
								<td> {{$data->updated_at}} </td>
                                   
                                   @if($data->Status_pengambilan == 0)
                                   
                                       <td>Belum Diambil </td>
                                   
                                   @endif
                                   @if($data->Status_pengambilan == 1)
                                   
                                       <td>Sudah Diambil</td>
                                   
                                   @endif
								<td> {{ $data->Petugas_penerima }} </td>
								<td> <a href="{{url('penggajian',$data->id)}}" class="btn btn-primary">Read</a></td>
								<td> <a href="{{ route('penggajian.edit', $data->id) }}" class="btn btn-warning"> Update </a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['penggajian.destroy', $data->id]]) !!}
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