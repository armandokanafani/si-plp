
@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success">
                Halo, Selamat Datang {{ $user->nama }}
            </div>
        </div>
    </div>

    {{-- Dashboard Mahasiswa - Tampilan hasil Penempatan --}}
    @if ($user->level == 6)

        {{-- @foreach ($datas as $data)
            @if ($data->id_mahasiswa == $user->id)
                
            @else
            <div class="alert alert-danger">
                Data penempatan belum ditambahkan
            </div>
            @endif
        @endforeach --}}
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="card-tittle">Hasil Penempatan</h6>
            </div>
            <div class="card-body">
                @foreach ($data_penempatan as $data)
                    @if ($data->user_id == $user->id)
                        @if ($data->status_koordinator == 0 || $data->status_pamong == 0)
                        <div class="alert alert-danger">
                            Data penempatan belum disetujui
                        </div>
                        @else
                        <div class="alert alert-success">
                            Data penempatan telah disetuji
                        </div> 
                        @endif
                    <p>Nama &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;: {{ $data->nama }}</p>
                    <p>NIM &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;: {{ $data->nim }}</p>
                    <p>Penempatan &emsp; &emsp; &emsp; &emsp; : {{ $data->sekolah }}</p>
                    <p>Peminatan &emsp; &emsp; &emsp; &emsp; &emsp;: {{ $data->peminatan }}</p>
                    <p>Dosen Pembimbing &emsp;&ensp;&nbsp;: {{ $data->dospem }}</p>
                    <p>Guru Pamong &emsp; &emsp; &emsp;&ensp;&ensp;: {{ $data->pamong }}</p>
                    
                    @endif    

                @endforeach
            </div>
        </div>
    @endif
@endsection