<ul class="nav">
    {{-- Dashborad Menu --}}
    <li class="nav-item"> 
      <a class="nav-link" href="{{url('/home')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    {{-- Admin --}}
    @if ($user->level == 1)
        <li class="nav-item">
            <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.user') }}">Data Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sekolah.index') }}">Data Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.pendataan.admin') }}">Data Pengalokasian</a>
                    </li>
                </ul>
            </div>
        </li>
    @endif

    {{-- Kaprodi --}}
    @if ($user->level == 2)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show.pendataan.kaprodi') }}">Pendataan Penempatan</a>
        </li>
    @endif

    {{-- Koordinator --}}
    @if ($user->level == 4)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show.pendataan.koor') }}">Pendataan Penempatan</a>
        </li>
    @endif


    {{-- Pamong --}}
    @if ($user->level == 5)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show.pendataan.pamong') }}">Pendataan Penempatan</a>
        </li>
    @endif

    {{-- Mahasiwsa --}}
    @if ($user->level == 6)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('add.pendataan') }}">Pendataan Penempatan</a>
        </li>
    @endif