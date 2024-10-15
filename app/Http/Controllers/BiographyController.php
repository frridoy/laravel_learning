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
        $biographies = Biography::with('author')->get();
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
        $biography = new Biography();
        $biography -> content = $request ->content;
        $biography -> author_id = $request ->author_id;
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
    public function edit(Biography $biography)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biography $biography)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biography $biography)
    {
        //
    }
}
