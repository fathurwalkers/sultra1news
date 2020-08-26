<?php


namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class IndexPost extends Component
{
    public function render()
    {
        $data = Article::latest()->get();
        return view('livewire.index-post', ['data' => $data]);
    }
}
