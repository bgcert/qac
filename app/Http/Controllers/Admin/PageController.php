<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = \App\Page::orderBy('priority', 'asc')->get();
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $request->has('menu_item')) {
            $request->merge([ 'menu_item' => true ]);
        }

        $request->validate([
            'title'=>'required|string',
            'slug'=>'required',
            'menu_item' => 'sometimes|boolean',
            'priority' => 'integer',
            'body'=> 'required'
        ]);

        \App\Page::create($request->all());
        return redirect()->route('admin.pages.index')->with('success', 'Страницата е добавена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = \App\Page::where('slug', $slug)->first();
        return view('pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = \App\Page::find($id);
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->merge([ 'menu_item' => $request->has('menu_item') ? true : false ]);

        $request->validate([
            'title'=>'required|string',
            'slug'=>'required',
            'menu_item' => 'sometimes|boolean',
            'priority' => 'integer',
            'body'=> 'required'
        ]);

        $page = \App\Page::find($id);
        $page->update($request->all());
        return redirect()->route('admin.pages.index')->with('success', 'Страницата е обновена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
