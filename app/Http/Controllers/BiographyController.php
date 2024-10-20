<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Biography;
use Illuminate\Http\Request;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $biographies = Biography::with('author')->get();

        $biographies = Biography::with(['author:id,author_name']) 
        ->select('id', 'content', 'author_id')
        ->get();
        return view('biography.list', compact('biographies'));

       
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('biography.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
          'content' => 'required',
          'author_id' => 'required|exists:authors,id', 
        ]);

        if($request->fails){
            return redirect()->back()->with('input')->withErrors($validator);
        }

        $biography = new Biography();
        $biography->content = $request->content;
        $biography->author_id = $request->author_id;
        $biography->save();
        return redirect()->route('biographies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biography $biography)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $biography=Biography::find($id);
        $biography = Biography::with('author')->findOrFail($id);

        $authors = Author::select('id', 'author_name')->get();

        return view('biography.edit', compact('biography', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);


        $biography = Biography::findOrFail($id);

        $biography->content = $request->content;
        $biography->author_id = $request->author_id;

        $biography->save();


        return redirect()->route('biographies.index')->with('success', 'Biography updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $biography = Biography::findOrFail($id);

        if($biography){

            $biography->delete();
        }
        return redirect()->back();
    }
    
} 
