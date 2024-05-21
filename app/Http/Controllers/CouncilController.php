<?php

namespace App\Http\Controllers;

use App\Models\council;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class CouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "council List <b>testing</b>";
        return view("council.index",['title'=>$title, 'councils' => council::all()]);

        // return view('council.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("council.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Dd($request->all());
        $council = new council();
       $council->position = $request->position;
       $council->of_person = $request->of_person;
       $council->description = $request->description;
       $council->is_completed = $request->is_completed == "on" ? 1 : 0;
       $council->save();
       return redirect()->route('council.index')->with('success', 'council created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(council $council)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(council $council)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, council $council)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(council $council)
    {
        //
    }
}
