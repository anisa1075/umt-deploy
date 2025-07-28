<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Edit Galeri')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('update.galeri', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="img">Image Galeri</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_galeri" class="form-label">Kategori Galeri</label>
                            <select class="form-select" aria-label="Default select example" id="kategori_galeri" name="kategori_galeri">
                                <option selected>{{ $galeri->kategori->kategori }}</option>
                                @foreach ($kategoriGaleri as $row)
                                <option value="{{ $row->id }}"
                                    {{ old('kategori') == $row->id ? 'selected' : '' }}>
                                    {{ $row->kategori }}</option>
                                @endforeach
                              </select>
                        </div>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Galeri</label>
                            <input type="text" id="judul" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="negara" class="form-label">Negara</label>
                            <input type="text" id="negara" name="negara" class="form-control" value="{{ $galeri->negara }}" required>
                        </div>

                        

                   
                        <div class="mb-3">
                            <label for="desc" class="form-label">Deskripsi Foto</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Enter ...">{{ $galeri->desc }}</textarea>
                          </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      
                </div>
            </div>
        </div>
    </div>


    

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
