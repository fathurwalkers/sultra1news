@extends('layouts.adminlayouts')

@section('title', 'Edit Post - Sultra1News')

@push('after-script')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
<style>
    /*  */
</style>
@endpush

@section('main-content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Blank Page</h1>
        </div>

        <div class="section-body">
            <form action="{{ url('/post/update') }}/{{$article->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Berita : </label>
                    <input type="judul" name="post_judul" class="form-control" id="judul" aria-describedby="judulHelp"
                        value="{{ $article->post_judul }}">
                </div>

                <textarea class="" name="post_isi" value="{{ $article->post_isi }}">{{ $article->post_isi }}</textarea>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h4>Upload Gambar</h4>
                    </div>
                    <div class="card-body">
                        <div class="dz-default dz-message">
                            <input type="file" name="gambar" value="{{ $article->gambar }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </section>
</div>

@endsection

@push('after-script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script>
    new FroalaEditor('textarea');
</script>
@endpush