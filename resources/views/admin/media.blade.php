@extends('layouts.adminlayouts')

@section('title', 'Media Sultra1News')

@push('after-script')
@endpush

@section('main-content')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Gallery</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Gallery</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Media Query</h4>
            </div>
            <div class="card-body">
              <div class="gallery gallery-md">
                @foreach ($gambars as $gambar)
                <div class="gallery-item" data-image="{{ asset($gambar->nama_gambar) }}"
                  data-title="{{ asset($gambar->nama_gambar) }}"></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- END - Main Content -->

@endsection

@push('after-script')
@endpush