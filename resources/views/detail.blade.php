@extends('layout.master')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Detail Mahasiswa</h4>
            </div>
            <div class="panel-body">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" value="{{$data->nim}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{$data->nama_lengkap}}" class="form-control" readonly>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" name="fakultas" id="fakultas" value="{{$data->fakultas}}" class="form-control" readonly>
                        </div>
                    </div>                    
                    <div class="form-group row">    
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label> 
                        <div class="col-sm-10">   
                            <input type="text" name="prodi" id="prodi" value="{{$data->prodi}}" class="form-control" readonly>
                        </div>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Kembali" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
@endsection