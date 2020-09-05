<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function index()
    {
        $result = Http::get('https://jsonplaceholder.typicode.com/todos')->body();
        return view('viewapi.apiindex', [
            'result' => $result
        ]);
    }
}
