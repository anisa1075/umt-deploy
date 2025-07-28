@extends('template.base')
@section('title', 'Tabel Kategori Galeri')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Kategori Galeri</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index.home') }}">Dashboard</a></li>
        </ol>
    </div>


    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Alert Create-->
            @if (Session::get('Create'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('Create') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
            @endif
            <!-- End Alert Create -->

            {{-- Alert Update --}}
            @if (Session::get('Update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ Session::get('Update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
            @endif
            {{-- End Alert Update --}}

            {{-- Alert Delete --}}
            @if (Session::get('Delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('Delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
            @endif
            {{-- End Alert Delete --}}

            <div class="input-group input-group-sm mb-3" style="width: 250px; margin-left: 43rem;">
                <form action="" method="get">
                    <div class="input-group-append">
                        <input type="search" name="search" class="form-control float-right" placeholder="Search">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <a href="#" class="btn btn-primary btn-md" type="button" data-toggle="modal"
                data-target="#modal-default">
                <i class="fa-solid fa-plus"></i> Kategori Galeri
            </a>


            <!-- Simple Tables -->
            <div class="card mt-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Kategori Galeri</h6>
                </div>


                <div class="table-responsive">
                    <table class="table table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th width="5%">Kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoriGaleri as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>

                                        <a class="btn btn-secondary" href="" data-toggle="modal" data-target="#edit{{ $row->id }}"><i
                                                class="fa-solid fa-pencil"></i></a>
                                        <a class="btn btn-danger" href="" data-toggle="modal"
                                            data-target="#delete{{ $row->id }}"><i class="fa-solid fa-trash"></i></a>

                                    </td>
                                </tr>
                                @include('Admin.KategoriGaleri.editKategori')
                                @include('Admin.KategoriGaleri.deleteKategori')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambahkan Data Kategori Galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.kategori.galeri') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Galeri</label>
                            <input type="text" id="kategori" name="kategori" class="form-control" required>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>

        </div>
    </div>
@endsection
