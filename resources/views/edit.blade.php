@extends('layout.master')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Mahasiswa</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->id)}}" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" value="{{$data->nim}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{$data->nama_lengkap}}" class="form-control">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="custom-select form-control" name="fakultas">
                                <option value="FT" selected>FT</option>
                                <option value="FE" selected>FE</option>
                                <option value="FMIPA" selected>FMIPA</option>
                                <option value="FIP" selected>FIP</option>
                                <option value="FIS" selected>FIS</option>
                                <option value="FIO" selected>FIO</option>
                                <option value="FPsi" selected>FPsi</option>
                            </select>
                        </div>
                    </div>                
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="prodi" id="prodi" value="{{$data->prodi}}" class="form-control">
                            
                        </div>
                    
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
@endsection