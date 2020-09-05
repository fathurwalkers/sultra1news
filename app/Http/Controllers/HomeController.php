<?php

namespace App\Http\Controllers;

use App\Article;
use Alert;
use App\ArticleKategori;
use App\Comment;
use App\Kategori;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        $article1 = Article::latest()->paginate(1);
        $articles_min = Article::latest()->paginate(5);
        $article4 = Article::latest()->paginate(4);
        $article3 = Article::latest()->paginate(3);
        $article8 = Article::latest()->paginate(8);
        $kategori = Kategori::all();
        return view('home.index', [
            'articles' => $articles,
            'articles_min' => $articles_min,
            'article1' => $article1,
            'article3' => $article3,
            'article4' => $article4,
            'article8' => $article8,
            'kategori' => $kategori
        ]);
    }

    public function show(Article $article, $slug)
    {
        $articles = Article::find($article)->first();
        $slug_receive = Article::where('post_slug', $slug)->first();
        $kategori = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);
        $post_id = $articles->id;
        $comment_post = Comment::where('article_id', $post_id)->get();
        if ($articles) {
            if ($slug_receive) {
                return view('show', [
                    'articles' => $articles,
                    'kategori' => $kategori,
                    'articles_4' => $articles_4,
                    'comment_post' => $comment_post
                ]);
            }
        }
        return redirect('/');
    }

    public function filterkategori(Request $request, Kategori $kategori)
    {
        $kategori2 = Kategori::all();
        $match = ArticleKategori::where('kategori_id', $kategori->id)->get();
        return view('showfilter', [
            'kategori2' => $kategori2,
            'match' => $match
        ]);
    }
}
