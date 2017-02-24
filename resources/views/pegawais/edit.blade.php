@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pegawai</div>
                <div class="panel-body">
                    {!! Form::model($pegawaii, ['method' => 'PATCH', 'route' => ['pegawai.update', $pegawaii->id], 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                            <label for="Nip" class="col-md-4 control-label">Nip</label>

                            <div class="col-md-6">
                                <input id="Nip" type="number" class="form-control" name="Nip" value="{{ $pegawaii->Nip }}" required autofocus>

                                @if ($errors->has('Nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id">
                                    <option value="{{ $jselect->id }}" selected>{{ $jselect->Nama_jabatan }}</option>
                                    @foreach($jab as $data)
                                        <option value="{{ $data->id }}"> {{ $data->Nama_jabatan }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Golongan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="golongan_id">
                                    <option value="{{ $gselect->id }}" selected>{{ $gselect->Nama_golongan }}</option>
                                    @foreach($gol as $data)
                                        <option value="{{ $data->id }}"> {{ $data->Nama_golongan }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="{{ old('Photo') }}" nullable autofocus>

                                @if ($errors->has('Photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
