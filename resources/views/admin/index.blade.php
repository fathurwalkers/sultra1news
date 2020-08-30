@extends('layouts.adminlayouts')

@section('title', 'Administrator Sultra1News')

@push('after-script')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<style>
    /*  */
</style>
@endpush

@section('main-content')
<livewire:index-post></livewire:index-post>
@endsection

@push('after-script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
    new FroalaEditor('textarea');
</script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush