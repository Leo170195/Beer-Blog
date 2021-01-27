<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Beer::orderByDesc('created_at')->get();
        return view('admin.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $article)
    {
        return view('admin.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $article)
    {
     
            $article->title = $request->title;
            $article->description = $request->description;
            $article->regions = $request->regions;
            if ($request->img) {
                $article->img = $request->file('img')->store('public/img');
            }
        //    dd($article);
            $article->save();
       
           
        return redirect(route('admin.index', compact('article')));
    }


    /**
     * Remove the specified resource from storage.
     * ->with('status', 'Hai apportato le modifiche correttamente')
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $article)
    {
        $article->delete();
        return redirect()->back();
    }
}
