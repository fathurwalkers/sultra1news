<?php

namespace App\Http\Controllers;

use App\Article;
use App\Kategori;
use App\Login;
use App\Gambar;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    // public function create()
    // {
    //     //
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_judul' => 'required',
            'post_isi' => 'required',
            'post_slug' => 'required',
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
        $posts = Article::create([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $request->post_slug,
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
        // POST UPDATE DATA
        $posts = Article::where('id', $article->id)->first()->update([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $request->post_slug,
            'kategori' => $article->kategori,
            'login_id' => $article->login_id,
            'gambar' => $article->gambar
        ]);
        return redirect('/administrator')->with('berhasil_post', 'Post berhasil di Posting!');
    }

    public function destroy(Article $article, Request $request)
    {
        $delete = Article::where('id', $article->id)->first();
        $delete->kategoris()->detach();
        $kategori = Kategori::where('article_id', $article->id)->first();
        $kategori->forceDelete();
        $delete->forceDelete();
        return redirect('/administrator');
    }
}
