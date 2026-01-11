<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/');
    }

    public function destroy(Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        $todo->delete();

        return back();
    }

    public function toggle(Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        $todo->update([
            'is_done' => !$todo->is_done
        ]);

        return back();
    }
}
