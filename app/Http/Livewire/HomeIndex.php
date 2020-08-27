<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;

class HomeIndex extends Component
{
    public function render()
    {
        $data = Article::latest()->get();
        return view('livewire.home-index', ['data' => $data]);
    }
}
