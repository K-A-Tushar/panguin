<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo 'create called';
        // view k call korar somoy data pass kora
        $title = "Todo List (view k call korar somoy data pass kora)";
        return view("todo.index",['title'=>$title, 'todos' => Todo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo 'create called';
        $title = "Todocontroller create called";
        return view ("todo.create", ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
    //    dd($request->all());
       $todo = new Todo();
       $todo->title = $request->title;
       $todo->description = $request->description;
       $todo->is_completed = $request->is_completed == "on" ? 1 : 0;
       $todo->save();
       return redirect()->route('todo.index')->with('success', 'Todo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        // echo 'show called';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        echo 'edit called';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        echo 'update called';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        echo 'destroy called';
    }
}
