<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Tambah User')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('tambah.user') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="img">Image Profile Agent</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img" required>
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama User</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat_perusahaan" class="form-label">Alamat Perusahaan</label>
                            <input type="text" id="alamat_perusahaan" name="alamat_perusahaan" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Perusahaan</label>
                            <input type="number" id="phone" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="role" class="form-label">Role User</label>
                            <select class="form-select" aria-label="Default select example" id="role" name="role">
                                <option selected>Pilih Role</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>

                        <div class="mb-3" style="display: none;">
                            <label for="kode_akses" class="form-label">Kode Akses</label>
                            <input type="hidden" id="kode_akses" name="kode_akses" value="{{ old('kode_akses') }}">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
