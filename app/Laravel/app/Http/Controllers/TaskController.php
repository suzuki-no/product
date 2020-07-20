<?php

namespace App\Http\Controllers;

use App\Task;
use App\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    //追加 取得
    public function getTasks()
    {
        $results = array();
        /*
        $tasks = Task::all();
        return $tasks;
        */
        $results["task"] = Task::all();
        $results["todo"] = Todo::all();
        return $results;
    }
    //追加 書き込む
    public function addTask(Request $request)
    {
        $task = new Task;

        $task->name = request('name');
        $task->save();
        $tasks = Task::all();
        return $tasks;
    }
    //追加 削除
    public function deleteTask(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        $tasks = Task::all();
        return $tasks;
    }
}
