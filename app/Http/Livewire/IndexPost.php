<?php


namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class IndexPost extends Component
{
    public $status_page = 1;

    public function render()
    {
        return view('livewire.index-post');
    }

    public function getCreate()
    {
        $status_page = 2;
        $this->emit('CreatePost');
    }
}
