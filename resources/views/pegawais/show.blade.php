@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h2><center> Pegawai </center></h3></div>

                    <div class="panel-body">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label for="photo" class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <center><input type="image" class="form" id="Photo" img src="{{'/image/'.$pegawaii->Photo.''}}" height="100px" width="100px" readonly></center>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Nama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" placeholder="{{$pegawaii->User->name}}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Nama_jabatan" placeholder="{{$pegawaii->Jabatan->Nama_jabatan}}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Golongan" class="col-sm-2 control-label">Golongan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Nama_golongan" placeholder="{{$pegawaii->Golongan->Nama_golongan}}" readonly>
                                </div>
                            </div>
                            
                        </form>

                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-8">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('pegawai')}}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop