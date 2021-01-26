<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function article()
    {
        return view('article');
    }
    public function submit (Request $request){
        $article = Beer::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'regions' => $request->input('regions'),
            'img' => $request->file('img')->store('public/img')
        ]);
           
        return redirect()->back()->with('status', 'La tua Birra è stata aggiunta al catalogo Grazie!');
    }
    public function detail (Beer $article) {
              

        return view('detail',compact('article'));
    }
}
