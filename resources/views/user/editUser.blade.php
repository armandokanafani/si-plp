@extends('layout.main')

@section('content')
<form action="{{ route('process.user.edit', $data->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit user</h4>
                  
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ $data->nama }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>
                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ $data->username }}" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                        <label for="level" class="col-md-4 control-label">Level</label>
                        <div class="col-md-6">
                        <select class="form-control" name="level" required="">
                            <option value="1" @if($data->level == '1') selected @endif>Admin</option>
                            <option value="2" @if($data->level == '2') selected @endif>Kepala Prodi</option>
                            <option value="3" @if($data->level == '3') selected @endif>Kepala Sekolah</option>
                            <option value="4" @if($data->level == '4') selected @endif>Dosen Pembimbing</option>
                            <option value="5" @if($data->level == '5') selected @endif>Guru Pamong</option>
                            <option value="6" @if($data->level == '6') selected @endif>Mahasiswa</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" onkeyup='check();' name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">
                            <span id='message'></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">
                                Update
                    </button>
                    <a href="{{route('show.user')}}" class="btn btn-light pull-right">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
</form>
@endsection