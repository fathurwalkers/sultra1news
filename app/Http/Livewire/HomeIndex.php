<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;
use App\Kategori;
use App\ArticleKategori;

class HomeIndex extends Component
{
    public function render()
    {
        $data = Article::with('kategoris')->latest()->get();
        // $kategori = Article::with('kategoris')->latest()->get();
        // dd($data);
        return view('livewire.home-index', [
            'data' => $data
            // 'kategori' => $kategori
        ]);
    }
}
