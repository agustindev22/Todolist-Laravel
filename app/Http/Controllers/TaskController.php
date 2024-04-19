<?php

namespace App\Http\Controllers;

use App\Models\task; //fijarnos que el modelo este incluido
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $task['tasks']=Task::all();
         return view('task.index', $task);

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
    public function store(Request $request) //store va en web.php en metodo post 
    {
        //print_r($_POST);
        //mvc modelo vista controlador 
        $task= request()->all();  
        Task::create($task);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // es para eliminar los datos agregados se busca el registro, lo elimina ylos redirecciona a la principal
        $task=Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
