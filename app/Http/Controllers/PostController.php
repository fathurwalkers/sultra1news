<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleKategori;
use App\Comment;
use App\Kategori;
use App\Login;
use App\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        $validatedData = $request->validate([
            'post_judul' => 'required',
            'post_isi' => 'required',
            'kategori' => 'required'
        ]);

        $gambar_cek = $request->file('gambar');

        if (!$gambar_cek) {
            $gambar = null;
        }
        $gambar = $request->file('gambar')->store('gambar');
        // dd($request->kategori);
        $kategori_b = $request->kategori;
        $kategori = implode(", ", $kategori_b);
        // $kategori_reqq = explode(",", $kategori);
        // $kategori_req = json_encode($kategori_reqq);
        $user_sesi = session('data_login');
        $posts = new Article;
        $slug_req = $request->post_judul;
        $slug_lower = Str::of($slug_req)->lower();
        $slug = Str::slug($slug_lower, '-');

        // dd($slug);

        $posts = Article::create([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $slug,
            'login_id' => $user_sesi->id,
            'gambar' => $gambar
        ]);
        $posts->kategoris()->attach($kategori_b);
        $gambars = new Gambar;
        $gambars = Gambar::create([
            'nama_gambar' => $gambar
        ]);

        $gambars->save();
        $posts->save();
        // dd($posts);

        return redirect('/administrator/create')->with('berhasil_post', 'Post berhasil di Posting!');
    }

    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
        // EDIT DATA
        if (!session('data_login')) {
            return redirect('/login');
        }
        $users = session('data_login');
        return view('admin.editpost', [
            'article' => $article,
            'users' => $users
        ]);
    }

    public function update(Request $request, Article $article)
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        // POST UPDATE DATA
        $posts = Article::where('id', $article->id)->first()->update([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $article->post_slug,
            'login_id' => $article->login_id,
            'gambar' => $article->gambar
        ]);
        return redirect('/administrator')->with('berhasil_post', 'Post berhasil di Posting!');
    }

    public function destroy(Article $article, Request $request)
    {
        if (!session('data_login')) {
            return redirect('/login');
        }
        $delete = Article::where('id', $article->id)->first();
        $delete->kategoris()->detach();
        $delete->forceDelete();
        return redirect('/administrator');
    }

    public function comment(Article $article, Request $request)
    {
        // dd($article);
        $komen = new Comment;
        $komen = Comment::create([
            'sender_name' => $request->sender_name,
            'sender_content' => $request->sender_content,
            'article_id' => $article->id,
        ]);
        $komen->save();
        return redirect()->back();
    }
}
