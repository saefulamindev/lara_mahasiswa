@extends('layout.master')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tambah Data Mahasiswa</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('insert')}}" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" class="form-control" required="require">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select name="fakultas" class="custom_select form-control" id="fakultas">
                              <option value="FT">FT</option>
                              <option value="FE">FE</option>
                              <option value="FMIPA">FMIPA</option>
                              <option value="FIP">FIP</option>
                              <option value="FIS">FIS</option>
                              <option value="FIO">FIO</option>
                              <option value="FPsi">FPsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="prodi" id="prodi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection