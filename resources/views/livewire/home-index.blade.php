<div class="row">
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr class="text-center bg-dark text-white">
                                <th>#</th>
                                <th>Judul Post</th>
                                <th>Slug</th>
                                <th>Gambar</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($data as $item)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->post_judul }}</td>
                                <td>{{ $item->post_slug }}</td>
                                <td><img src="{{ asset($item->gambar) }}" width="250px" height="150px"></td>
                                <td>{{ $item->login->name }}</td>
                                <td>{{ $item->created_at }}</td>

                                @foreach ($item->kategoris as $cat)
                                <td>
                                    <p class="badge-info">
                                        {{ $cat->kategori_nama }}
                                    </p>
                                </td>
                                @endforeach

                                <td>
                                    <div class="d-inline-flex">
                                        <form action="{{url('/post/edit')}}/{{$item->id}}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info mr-2">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </button>
                                        </form>

                                        <form action="{{ route('deletepost') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" value="{{ $item->id }}">
                                                <i class="fas fa-times"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>

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