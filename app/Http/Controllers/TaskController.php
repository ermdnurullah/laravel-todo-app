<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task; // using the todos model for database operations.

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }
    
    public function create(Request $request)
    {
        $request->validate(['name'=>'required|string|max: 255']);
        Task::create(['name' => $request->name]);

        return redirect('/');
    }
    
 
    public function edit($id){
        $task = Task::find($id);
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks, 'task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name'=>'required|string|max: 255']);
        $task = Task::find($id);
        $task->update(['name' => $request->name]);

        return redirect('/');
    }

    public function delete($id)
    {
        $tast = Task::find($id)->delete(); 
        return redirect('/');
    }

}
