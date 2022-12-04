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
                        <a class="nav-link" href="">Data Penempatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Data Pengalokasian</a>
                    </li>
                </ul>
            </div>
        </li>
    @endif

    {{-- Mahasiwsa --}}
    @if ($user->level == 6)
        <li class="nav-item">
            <a class="nav-link" href="">Pendataan Penempatan</a>
        </li>
    @endif