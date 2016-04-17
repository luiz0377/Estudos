<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    /* Definindo método para listar todas Listas por Json */

    public function index()
    {
       $tasks = Task::all();

        return response()->json($tasks);
    }


    public function destroy($id)
    {
        return response()->json(Task::destroy($id));
    }

    public function changeStatus($id)
    {
        $task = Task::find($id);
        $task->status = !$task->status;
        $task->save();

        return response()->json($task);
    }
}
