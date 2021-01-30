<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function detail (Beer $article) {
              

        return view('detail',compact('article'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $scripts = ["js/navbarScript.js"];
        $articles = Beer::orderByDesc('created_at')->get();
        // dd($articles);
        return view('homepage', compact('articles', 'scripts'));
    }
    public function cartina()
    {
        return view('cartina');
    }
    public function show($region){
        $beer = Beer::where('regions', $region)->get();
        return view('show', compact('beer', 'region'));
    }
}