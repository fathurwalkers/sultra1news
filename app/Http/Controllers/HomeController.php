<?php

namespace App\Http\Controllers;

use App\Article;
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
        return view('home.index', [
            'articles' => $articles,
            'articles_min' => $articles_min,
            'article1' => $article1,
            'article3' => $article3,
            'article4' => $article4
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Article $article)
    {
        return view('show', ['article' => $article]);
    }

    // public function edit($id)
    // {
    //     //
    // }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
