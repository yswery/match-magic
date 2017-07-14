<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $memories = Memory::orderBy('created_at', 'DESC')->limit(12)->get();
        return view('home')->with('memories', $memories);
    }
}
