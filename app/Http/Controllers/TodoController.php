<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = Todo::all();
        return view('welcome', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'work' =>'required',
            'due_date' =>'required',
        ]);

        $todo = new Todo();
        $todo->name = $request->name;
        $todo->work = $request->work;
        $todo->due_date = $request->due_date;
        $todo->save();

        return redirect(route('welcome.todo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view("layout.update" , compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->back();
    }
}
