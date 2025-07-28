<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: white" href="{{ asset('') }}index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img1/logo.png') }}" width="100%">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: black" >RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('index.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.destinasi') }}">
            <i class="fa-solid fa-map-location-dot"></i>
            <span>Destinasi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.testimoni.teks') }}">
            <i class="fa-regular fa-comment"></i>
            <span>Testimoni Teks</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.testimoni.video') }}">
            <i class="fa-solid fa-video"></i>
            <span>Testimoni Video</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.kategori.galeri') }}">
            <i class="fa-solid fa-list"></i>
            <span>Kategori Galeri</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.galeri') }}">
            <i class="fa-solid fa-image"></i>
            <span>Galeri</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.user') }}">
            <i class="fa-solid fa-users"></i>
            <span>User</span>
        </a>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fa-solid fa-list-check"></i>
            <span>Produk</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded mt-2">
                {{-- <h6 class="collapse-header">Forms</h6> --}}
                {{-- <a class="collapse-item" href="{{ route('index.kategori.produk') }}">Kategori Produk</a> --}}
                {{-- <a class="collapse-item" href="{{ route('index.tailor.made') }}">Tailor Made</a> --}}
                <a class="collapse-item" href="{{ route('index.ready.package') }}">Ready Package</a>
                <a class="collapse-item" href="{{ route('index.trip.akan.datang') }}">Series Akan Datang</a>
                <a class="collapse-item" href="{{ route('index.trip.selesai') }}">Series Selesai</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.user') }}">
            <i class="fa-solid fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

</ul>
