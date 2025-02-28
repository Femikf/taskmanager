<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskCompletedNotification;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Task::where('user_id', Auth::id());
    
        // Apply status filter if provided
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
    
        $tasks = $query->get();
    
        return view('tasks.index', compact('tasks'));
    }
    

        /**
     * display  the create task page
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'required|date|after_or_equal:today',
        ]);

        try {
            DB::beginTransaction();

            $task = Task::create([
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'description' => $validated['description'],
                'status' => $validated['status'],
                'due_date' => $validated['due_date'],
            ]);
            if ($task->status == 'Completed') {
                Mail::to($task->user->email)->send(new TaskCompletedNotification($task));
            }
            DB::commit();
            return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('tasks.create')->with('error', 'Failed to create task: ' . $e->getMessage());
        }    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * edit tasks
     * @param \App\Models\Task $task
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'required|date|after_or_equal:today',
        ]);

        try {
            DB::beginTransaction();
            $task->update($validated);
            if ($task->status == 'Completed') {
                Mail::to($task->user->email)->send(new TaskCompletedNotification($task));
            }
            DB::commit();
            return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('tasks.edit', $task->id)->with('error', 'Failed to update task: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        try {
            DB::beginTransaction();
            $task->delete();
            DB::commit();
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('tasks.index')->with('error', 'Failed to delete task: ' . $e->getMessage());
        }
    }
}
