<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;


Route::get('/', function () {
    
    $tasks = DB::table('tasks')->get();
    
    return view('welcome', compact('tasks'));
     
    // compact('name') EQUAL ['name' => $name]
    
    // return view('welcome')->with('name', 'Dmitry');
});

Route::get('/tasks', function() {
    
    // $tasks = DB::table('tasks')->latest()->get();

    $tasks = Task::all();  // Обращаемся к модели Task

    return view('tasks.index', compact('tasks'));   

});

Route::get('/tasks/{task}', function($id) {

    // dd($id); // helper dump_var()
    
    // $task = DB::table('tasks')->find($id);
    
    $task = Task::find($id);

    // Task::incomplete();
   
    return view('tasks.show', compact('task'));   // 'tasks/show'

});
