<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    
    public function index()
    {
        $tasks = Task::all();
        return json_encode($tasks);
    }


    public function store(Request $request)
    {

        $task = new Task($request->all());
        $task->save();
        return json_encode('guardado');
    }

    public function update(Request $request, $id)
    {
        
        $task = Task::findOrFail($id);
        $task->update(array_merge($request->all()));
        $task->save();
        return json_encode('editado');
    }

    public function delete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return json_encode('Eliminado');
    }


}
