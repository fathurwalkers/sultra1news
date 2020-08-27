<?php

namespace App\Http\Controllers;

use App\Article;
use App\Login;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'post_judul' => 'required',
            'post_isi' => 'required',
            'post_slug' => 'required',
            'kategori' => 'required'
        ]);

        $kategori = implode(", ", $request->kategori);
        $user_sesi = session('data_login');
        $posts = new Article;
        $posts = Article::create([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $request->post_slug,
            'kategori' => $kategori,
            'login_id' => $user_sesi->id
        ]);

        // dd($user_sesi);

        $posts->save();

        return redirect('/administrator/create')->with('berhasil_post', 'Post berhasil di Posting!');
    }

    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
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
        $user_sesi = session('data_login');
        $posts = Article::where('id', $article->id)->first()->update([
            'post_judul' => $request->post_judul,
            'post_isi' => $request->post_isi,
            'post_slug' => $request->post_slug,
            'kategori' => $article->kategori,
            'login_id' => $article->login_id
        ]);
        return redirect('/administrator')->with('berhasil_post', 'Post berhasil di Posting!');
    }

    public function destroy(Article $article)
    {
        //
    }
}
