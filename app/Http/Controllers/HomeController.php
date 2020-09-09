<?php

namespace App\Http\Controllers;

use App\Article;
use Alert;
use App\ArticleKategori;
use App\Comment;
use App\Kategori;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $kategori2 = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);
        $post_id = $articles->id;
        $comment_post = Comment::where('article_id', $post_id)->get();
        if ($articles) {
            if ($slug_receive) {
                return view('show', [
                    'articles' => $articles,
                    'kategori' => $kategori,
                    'articles_4' => $articles_4,
                    'comment_post' => $comment_post,
                    'kategori2' => $kategori2
                ]);
            }
        }
        return redirect('/');
    }

    public function filterkategori(Request $request, Kategori $kategori, $kategorinama)
    {
        // dd($kategorinama);
        // $match2 = \App\Article::where('id', $article->article_id)->latest()->paginate(6);
        $kategori2 = Kategori::all();
        $kategori3 = Kategori::all();
        $articles4 = Article::latest()->paginate(5);
        $match = ArticleKategori::where('kategori_id', $kategori->id)->get();
        // foreach ($match as $article) {
        //     while ($match3 = \App\Article::where('id', $article->article_id)->latest()->paginate(6)) {
        //         $match2 = [$match3];
        //     }
        // }
        return view('showfilter', [
            'kategori2' => $kategori2,
            'match' => $match,
            'articles4' => $articles4,
            'kategori3' => $kategori3
            // 'match2' => $match2
        ]);
    }

    public function redaksi()
    {
        $kategori = Kategori::all();
        $kategori2 = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);
        return view('redaksi', [
            'kategori' => $kategori,
            'articles_4' => $articles_4,
            'kategori2' => $kategori2
        ]);
    }

    public function hubungikami()
    {
        $kategori = Kategori::all();
        $kategori2 = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);

        return view('hubungi-kami', [
            'kategori' => $kategori,
            'articles_4' => $articles_4,
            'kategori2' => $kategori2
        ]);
    }

    public function pedomanmediasiber()
    {
        $kategori = Kategori::all();
        $kategori2 = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);
        return view('pedoman-media-siber', [
            'kategori' => $kategori,
            'articles_4' => $articles_4,
            'kategori2' => $kategori2
        ]);
    }

    public function about()
    {
        $kategori = Kategori::all();
        $kategori2 = Kategori::all();
        $articles_4 = Article::latest()->paginate(4);
        return view('about', [
            'kategori' => $kategori,
            'articles_4' => $articles_4,
            'kategori2' => $kategori2
        ]);
    }
}
