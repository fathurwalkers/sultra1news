@extends('layouts.adminlayouts')

@section('title', 'Buat Postingan Baru - Sultra1News')

@push('after-script')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<style>
    /*  */
</style>
@endpush

@section('main-content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buat Postingan Baru</h1>
        </div>

        <div class="section-body">
            @if (session('berhasil_post'))
            <div class="alert alert-success text-center">
                {{ session('berhasil_post') }}
            </div>
            @endif
            <form action="{{ url('/post/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Berita : </label>
                    <input type="judul" name="post_judul" class="form-control" id="judul" aria-describedby="judulHelp">
                </div>

                <div class="form-group">
                    <label for="slug">Slug Berita : </label>
                    <input type="slug" name="post_slug" class="form-control" id="slug" aria-describedby="slugHelp">
                </div>
                <textarea class="" name="post_isi"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </section>
</div>

@endsection

@push('after-script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
</script>
</script>
<script>
    new FroalaEditor('textarea');
</script>
@endpush