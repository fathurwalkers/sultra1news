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

                <div class="form-group">
                    <label for="slug">Slug Berita : </label>
                    <input type="slug" name="post_slug" class="form-control" id="slug" aria-describedby="slugHelp"
                        value="{{ $article->post_slug }}">
                </div>

                <div class="form-group">
                    <div class="card m-b-30">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="nasional"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="nasional">Nasional</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="internasional"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="internasional">Internasional</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="sultra"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="sultra">Sultra</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="kendari"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="kendari">Kendari</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="baubau"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="baubau">Baubau</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="kategori[]" type="checkbox" id="terbaru"
                                value="{{ $article->kategori }}">
                            <label class="form-check-label" for="terbaru">Terbaru</label>
                        </div>

                    </div>
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