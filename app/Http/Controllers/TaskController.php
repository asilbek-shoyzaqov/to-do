<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        // Show only the tasks of the authenticated user
        $tasks = Task::all ();
        return view('admin.my-tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('admin.my-tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Create a task associated with the authenticated user
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed') ? true : false,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.my-tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        // Ensure the task belongs to the authenticated user
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('admin.my-tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // Ensure the task belongs to the authenticated user
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task->update($request->only(['title', 'description', 'completed']));

        return redirect()->route('admin.my-tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        // Ensure the task belongs to the authenticated user
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $task->delete();
        return redirect()->route('admin.my-tasks.index')->with('success', 'Task has been deleted.');
    }
}
