<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $listeners = [
        'getCreate' => 'renderCreate'
    ];
    public function render()
    {
        return view('livewire.create-post');
    }

    public function renderCreate()
    {
        // 
    }
}
