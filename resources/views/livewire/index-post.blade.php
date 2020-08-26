<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buat Postingan Baru</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Full Width</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->post_judul }}</td>
                                            <td>{{ $item->post_slug }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <div class="badge badge-success d-inline">Active</div>
                                                <a href="#" class="btn btn-secondary">Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{--  --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            {{-- {{ $data->links() }} --}}

        </div>
    </section>
</div>