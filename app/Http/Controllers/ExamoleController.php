<?php

namespace App\Http\Controllers;
use App\Models\examole;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ExamoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(examole::all());
        // return view('examole.index', ['examoles' => examole::all()]);
        $examoles = Examole::paginate(config('global.paginate'));
        return view('examole.index', compact('examoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('examole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        // Create a new instance of Examole model
        $examole = new Examole();
        $examole->name = $request->name;
        $examole->description = $request->description;
        $examole->is_active = $request->is_active;
        $examole->created_at= now();
        $examole->updated_at= null;
        $examole->save();

        // Redirect to the index page with success message
        return redirect()->route('examole.index')->with('success', 'Examole created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(examole $examole)
    {
        //
        return view('examole.show', compact('examole'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(examole $examole)
    {
        //
        // Dd($examole);
        return view('examole.edit', ['examole' => $examole]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, examole $examole)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $examole->name = $validatedData['name'];
        $examole->description = $validatedData['description'];
        $examole->is_active = $validatedData['is_active'];
        $examole->updated_at= now();
        $examole->save();

        return redirect()->route('examole.index')->with('success', 'Examole updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(examole $examole)
    {
        //
    }
}
