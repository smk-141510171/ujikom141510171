@extends('layouts.aa')
@section('content')
<?php $page="Tambah Kategori Lembur"?>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: lightblue"><b>{{$page}}</b></div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{route('kategorilembur.store')}}" method="POST">    
                    <div class="form-group{{ $errors->has('kode_lembur') ? ' has-error' : '' }}">
                            <label for="kode_lembur" class="col-md-4 control-label">Kode lembur :</label>
                                <div class="col-md-6">
                                    <input type="text" name="kode_lembur" placeholder="Kode Lembur" class="form-control">
                                    @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan :</label>
                                <div class="col-md-6">
                                    <select type="text" name="jabatan_id" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach($jabatan as $data)
                                    <option value="{!! $data->id !!}">{!! $data->nama_jabatan!!}</option>
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
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan :</label>
                                <div class="col-md-6">
                                    <select type="text" name="golongan_id" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($golongan as $data)
                                        <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang :</label>
                                <div class="col-md-6">
                                    <input type="text" name="besaran_uang" placeholder="Besaran Uang" class="form-control">
                                    @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group">
                    @if (isset($error_create))
                            <div style="width: 100%;color: red;text-align: center;">
                                Jabatan <u>{{$kategori_lembur1->jabatan->nama_jabatan}}</u> && Golongan <u>{{$kategori_lembur1->golongan->nama_golongan}}</u> Sudah Ada 
                            </div>
                            @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4" >
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection