@extends('template.base')

@section('title', 'Edit Testimoni Video')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Testimoni Video</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index.testimoni.video') }}">Tabel Testimoni Video</a></li>
    </ol>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <div class="card" style="padding: 1rem; margin-top:1rem;">



                    <form action="{{ route('update.testimoni.video', $testimoniVideo->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="link" class="form-label">Link Youtube Testimoni</label>
                            <input type="text" class="form-control border" id="link" name="link"
                                aria-describedby="emailHelp" value="{{ $testimoniVideo->link }}">
                        </div>



                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection

@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
