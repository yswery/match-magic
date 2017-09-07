<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $memories = Memory::orderBy('created_at', 'DESC')->limit(12)->get();
        $suggestions = [
            'food'     => Suggestion::where('category', 'food')->inRandomOrder()->first(),
            'activity' => Suggestion::where('category', 'activity')->inRandomOrder()->first(),
            'random'   => Suggestion::where('category', 'random')->inRandomOrder()->first(),
        ];

        return view('home')->with('memories', $memories)->with($suggestions);
    }
}
