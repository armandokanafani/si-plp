@extends('layout.main')

@section('content')
{{-- Tambah User --}}
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>   
@endif
<div class="row">
    <div class="col-lg-2">
        <a href="{{ route('add.user') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah User</a>
    </div>
</div>
{{-- Tabel User --}}
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data User</h4>
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td class="py-1">{{$data->nama}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    @if($data->level == '1')  Admin @endif
                                    @if($data->level == '2')  Kepala Prodi @endif
                                    @if($data->level == '3')  Kepala Sekolah @endif
                                    @if($data->level == '4')  Dosen Pembimbing @endif
                                    @if($data->level == '5')  Guru Pamong @endif
                                    @if($data->level == '6')  Mahasiswa @endif
                                </td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            <a class="dropdown-item warning" href="{{ route('edit.user', $data->id) }}"> Edit </a>
                                            <form action="{{ route('delete.user', $data->id) }}" class="pull-left"  method="get">
                                                {{ csrf_field() }}
                                                <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                                </button>
                                            </form>
                                            {{-- <a class="dropdown-item" href="{{ route('delete.user', $data->id) }}">
                                                <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    Delete
                                                </button>
                                            </a> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection