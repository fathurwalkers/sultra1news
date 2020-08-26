{{-- <div> --}}
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buat Postingan Baru</h1>
        </div>

        <div class="section-body">

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
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>


        </div>
    </section>
</div>
{{-- </div> --}}