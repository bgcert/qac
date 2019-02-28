<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = \App\Slide::orderBy('priority', 'asc')->get();
        return view('slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $request->has('visible')) {
            $request->merge([ 'visible' => true ]);
        }

        $request->validate([
            'title'=>'required|string',
            'subtitle'=>'required|string',
            'visible' => 'sometimes|boolean',
            'action'=>'required|string',
            'priority' => 'integer'
        ]);

        \App\Slide::create($request->all());
        return redirect()->route('admin.slides.index')->with('success', 'Слайдът е добавена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = \App\Slide::find($id);
        return view('slides.edit', compact('slide'));
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
        $request->merge([ 'visible' => $request->has('visible') ? true : false ]);

        $request->validate([
            'title'=>'required|string',
            'subtitle'=>'required|string',
            'visible' => 'sometimes|boolean',
            'action'=>'required|string',
            'priority' => 'integer'
        ]);

        $slide = \App\Slide::find($id);
        $slide->update($request->all());
        return redirect()->route('admin.slides.index')->with('success', 'Слайдът е обновен');
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
