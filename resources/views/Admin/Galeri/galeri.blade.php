@extends('template.base')
@section('title', 'Tabel Galeri')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Galeri</h1>
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
            <a class="btn btn-primary mb-3" href="{{ route('form.galeri') }}" style="margin-top: -60px"><i
                    class="fa-solid fa-plus"></i> Galeri</a>
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Galeri</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th width="5%">Gambar</th>
                                <th>Kategori Galeri</th>
                                <th>Judul</th>
                                <th>Negara</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeri as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $row->img) }}" alt="{{ $row->img }}"
                                            class="img-fluid">
                                    </td>
                                    <td>{{ $row->kategori->kategori }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->negara }}</td>
                                    <td>
                                        <a class="btn btn-success text-center" href="{{ route('desc.galeri', $row->id) }}" title="deskripsi"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary" href="{{ route('edit.galeri', $row->id) }}"><i class="fa-solid fa-pencil"></i></a>
                                        <a class="btn btn-danger" href="" data-toggle="modal"
                                        data-target="#delete{{ $row->id }}"><i class="fa-solid fa-trash"></i></a>
                                       
                                    </td>
                                </tr>
                                @include('Admin.Galeri.deleteGaleri')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection
