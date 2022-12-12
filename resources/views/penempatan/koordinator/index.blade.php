@extends('layout.main')

@section('content')

{{-- Tabel  --}}
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pendataan</h4>
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Penempatan</th>
                                <th>Peminatan</th>
                                <th>Dosen Pembimbing</th>
                                <th>Guru Pamong</th>
                                <th>Status Pamong</th>
                                <th>Status Koordinator</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td class="py-1">{{$data->nama}}</td>
                                <td>{{$data->nim}}</td>
                                <td>{{$data->sekolah}}</td>
                                <td>{{$data->peminatan}}</td>
                                <td>{{$data->dospem}}</td>
                                <td>{{$data->pamong}}</td>
                                <td>
                                    @if ($data->status_pamong == 1)
                                    Disetujui
                                    @else
                                    Ditolak
                                    @endif
                                </td>
                                <td>
                                    @if ($data->status_koordinator == 1)
                                    Disetujui
                                    @else
                                    Ditolak
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            <a class="dropdown-item warning" href="{{ route('edit.pendataan.koor', $data->id) }}"> Edit </a>
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