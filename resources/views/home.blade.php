@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success">
                Halo, Selamat Datang {{ $user->nama }}
            </div>
        </div>
    </div>
@endsection