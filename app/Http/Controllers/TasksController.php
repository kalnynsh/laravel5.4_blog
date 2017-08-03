<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Task;  // Import Model Task


class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks')); 
    }
    
    public function show(Task $task) 
    {
//        $task = Task::find($id); // select * from "tasks" where "id" = '1' limit 1
        
        return view('tasks.show', compact('task'));
        
    }
}
