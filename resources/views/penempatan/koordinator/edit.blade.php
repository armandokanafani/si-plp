@extends('layout.main')

@section('content')
<form action="{{ route('process.pendataan.koor', $data_pendataan->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pendataan PLP</h4>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{ $data_pendataan->user_id }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ $data_pendataan->nama }}" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nim" class="col-md-4 control-label">NIM</label>
                        <div class="col-md-6">
                            <input id="nim" type="text" class="form-control" name="nim" value="{{ $data_pendataan->nim }}" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sekolah" class="col-md-4 control-label">Penempatan Sekolah</label>
                        <div class="col-md-6">
                            {{-- <input id="sekolah" type="text" class="form-control" name="sekolah" value="{{ $data_pendataan->sekolah }}" required readonly> --}}
                            <select class="form-control" name="sekolah" required="">
                                <optgroup label="Data Saat Ini">
                                    <option value="{{ $data_pendataan->sekolah }}" >{{ $data_pendataan->sekolah }}</option>
                                </optgroup>
                                <optgroup label="Jika Ingin Merubah">
                                    @foreach ($data_sekolah as $data)
                                        <option value="{{ $data->nama_sekolah }}" >{{ $data->nama_sekolah }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="peminatan" class="col-md-4 control-label">Peminatan</label>
                        <div class="col-md-6">
                            {{-- <input id="peminatan" type="text" class="form-control" name="peminatan" value="{{ $data_pendataan->peminatan }}" required readonly> --}}
                            <select class="form-control" name="peminatan" required="">
                                <optgroup label="Data Saat Ini">
                                    <option value="{{ $data_pendataan->peminatan }}">{{ $data_pendataan->peminatan }}</option>
                                </optgroup>
                                <optgroup label="Jika Ingin Merubah">
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="Multimedia">Multimedia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dospem" class="col-md-4 control-label">Dosen Pembimbing</label>
                        <div class="col-md-6">
                            <input id="dospem" type="text" class="form-control" name="dospem" value="{{ $data_pendataan->dospem }}" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pamong" class="col-md-4 control-label">Guru Pamong</label>
                        <div class="col-md-6">
                            <input id="pamong" type="text" class="form-control" name="pamong" value="{{ $data_pendataan->pamong }}" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_koordinator" class="col-md-4 control-label">Status Koordinator</label>
                        <div class="col-md-6">
                            {{-- <input id="status_koordinator" type="hidden" class="form-control" name="status_koordinator" value="{{ $data_pendataan->status_koordinator }}" required readonly> --}}
                            <select class="form-control" name="status_koordinator" required="">
                                <optgroup label="Data Saat Ini">
                                    <option value="{{ $data_pendataan->status_koordinator}}">
                                            @if ($data_pendataan->status_koordinator == 0)
                                                Ditolak
                                            @else
                                                Disetujui
                                            @endif
                                    </option>
                                </optgroup>
                                <optgroup label="Jika Ingin Merubah">
                                    @if ($data_pendataan->status_koordinator == 1)
                                    <option value="0">Ditolak</option>
                                    @else
                                    <option value="1">Disetujui</option>
                                    @endif 
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {{-- <label for="status_pamong" class="col-md-4 control-label">Status Pamong</label> --}}
                        <div class="col-md-6">
                            <input id="status_pamong" type="hidden" class="form-control" name="status_pamong" value="{{ $data_pendataan->status_pamong }}">
                            {{-- <select class="form-control" name="status_pamong" required="" >
                                <optgroup label="Data Saat Ini">
                                    <option value="{{ $data_pendataan->status_pamong}}">
                                            @if ($data_pendataan->status_pamong == 0)
                                                Ditolak
                                            @else
                                                Disetujui
                                            @endif
                                    </option>
                                </optgroup>
                                <optgroup label="Jika Ingin Merubah">
                                    @if ($data_pendataan->status_pamong == 1)
                                    <option value="0">Ditolak</option>
                                    @else
                                    <option value="1">Disetujui</option>
                                    @endif 
                                </optgroup>
                            </select> --}}
                        {{-- <input type="hidden" name="status_koordinator" value="0"> --}}
                    </div>

                    {{-- <div class="form-group">
                        <input type="hidden" name="status_pamong" value="0">
                    </div> --}}

                    <button type="submit" class="btn btn-primary" id="submit">
                                Update
                    </button>
                    <a href="{{route('show.pendataan.koor')}}" class="btn btn-light pull-right">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
</form>
@endsection