@extends('layout.main')

@section('content')
<form action="{{ route('process.sekolah.edit', $data->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Sekolah</h4>
                  
                    <div class="form-group">
                        <label for="nama_sekolah" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="nama_sekolah" type="text" class="form-control" name="nama_sekolah" value="{{ $data->nama_sekolah }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat_sekolah" class="col-md-4 control-label">Alamat</label>
                        <div class="col-md-6">
                            <input id="alamat_sekolah" type="text" class="form-control" name="alamat_sekolah" value="{{ $data->alamat_sekolah }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kepala_sekolah" class="col-md-4 control-label">Kepala Sekolah</label>
                        <div class="col-md-6">
                            <input id="kepala_sekolah" type="text" class="form-control" name="kepala_sekolah" value="{{ $data->kepala_sekolah }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guru_pamong" class="col-md-4 control-label">Guru Pamong</label>
                        <div class="col-md-6">
                            <input id="guru_pamong" type="text" class="form-control" name="guru_pamong" value="{{ $data->guru_pamong }}" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" id="submit">
                                Update
                    </button>
                    <a href="{{route('sekolah.index')}}" class="btn btn-light pull-right">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
</form>
@endsection