@extends('template.base')
@section('title', 'Tabel Data User')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Data User</h1>
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
            <a class="btn btn-primary mb-3" href="{{ route('form.user') }}" style="margin-top: -60px"><i
                    class="fa-solid fa-plus"></i> User</a>
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data User</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Perusahaan</th>
                                <th>Alamat</th>
                                <th>No.Telp</th>
                                <th>Role</th>
                                <th>Status Agent</th>
                                <th>Kode Akses</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <img src="{{ asset('storage/' . $row->img) }}" alt="{{ $row->name }}"
                                            class="img-fluid"></td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->nama_perusahaan }}</td>
                                    <td>{{ $row->alamat_perusahaan }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->role }}</td>
                                    <td>
                                        <div class="status"
                                            style="background-color: {{ $row->status == 'active' ? 'green' : 'red' }}; color: white; padding: 2px 4px; border-radius: 5px; text-align: center;">
                                            {{ $row->status }}
                                        </div>
                                    </td>
                                    <td>{{ $row->kode_akses }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;">
                                            <a class="btn btn-secondary" href="{{ route('edit.user', $row->id) }}"><i
                                                    class="fa-solid fa-pencil"></i></a>
                                            <a class="btn btn-danger" href="" data-toggle="modal"
                                                data-target="#delete{{ $row->id }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @include('Admin.User.deleteUser')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection
