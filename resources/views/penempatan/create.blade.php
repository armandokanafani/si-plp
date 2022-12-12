@extends('layout.main')

@section('content')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>   
@endif

<form method="POST" action="{{ route('add.process.pendataan') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Pendataan PLP</h4>
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama_sekolah" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nim" class="col-md-4 control-label">NIM</label>
                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control" name="nim" value="{{ old('nim') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sekolah" class="col-md-4 control-label">Penempatan Sekolah</label>
                            <div class="col-md-6">
                                <select class="form-control" name="sekolah" required="">
                                    @foreach ($data_sekolah as $data)
                                    <option value="{{ $data->nama_sekolah }}">{{ $data->nama_sekolah }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="peminatan" class="col-md-4 control-label">Peminatan</label>
                            <div class="col-md-6">
                                <select class="form-control" name="peminatan" required="">
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="Multimedia">Multimedia</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dospem" class="col-md-4 control-label">Dosen Pembimbing</label>
                            <div class="col-md-6">
                                <input id="dospem" type="text" class="form-control" name="dospem" value="{{ old('dospem') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pamong" class="col-md-4 control-label">Guru Pamong</label>
                            <div class="col-md-6">
                                <input id="pamong" type="text" class="form-control" name="pamong" value="{{ old('pamong') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="status_koordinator" value="0">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="status_pamong" value="0">
                        </div>


                        <button type="submit" class="btn btn-primary" id="submit">
                                    Simpan
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{url('/')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection