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
                            <tr class="">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->post_judul }}</td>
                                <td>{{ $item->post_slug }}</td>
                                <td><img src="{{ asset($item->gambar) }}" width="150px" height="100px"></td>
                                <td>{{ $item->login->name }}</td>
                                <td>{{ $item->created_at }}</td>

                                <td class="text-center">
                                    <div class="">
                                        @foreach ($item->kategoris as $cat)
                                        <p class="badge-info">
                                            {{ $cat->kategori_nama }}
                                        </p>
                                        @endforeach
                                    </div>
                                </td>

                                <td>
                                    <div class="d-inline-flex">
                                        <form action="{{url('/post/edit')}}/{{$item->id}}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info mr-2">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </button>
                                        </form>

                                        <form action="{{ url('/administrator')}}/{{$item->id}}/delete" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="article">
                                            <button type="submit" class="btn btn-danger">
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
                    {{ $data->links() }}
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