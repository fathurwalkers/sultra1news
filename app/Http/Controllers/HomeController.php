<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        $articles_min = Article::latest()->paginate(5);
        return view('home.index', [
            'articles' => $articles,
            'articles_min' => $articles_min
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
