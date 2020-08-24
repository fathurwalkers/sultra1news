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
            <textarea></textarea>
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