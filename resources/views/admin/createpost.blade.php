@extends('layouts.adminlayouts')

@section('title', 'Buat Postingan Baru - Sultra1News')

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
            <h1>Buat Postingan Baru</h1>
        </div>

        <div class="section-body">

            <form action="{{ url('/post/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="judul">judul address</label>
                    <input type="judul" name="post_judul" class="form-control" id="judul" aria-describedby="judulHelp">
                </div>

                <div class="form-group">
                    <label for="slug">slug address</label>
                    <input type="slug" name="post_slug" class="form-control" id="slug" aria-describedby="slugHelp">
                </div>

                <textarea class="" name="post_isi"></textarea>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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