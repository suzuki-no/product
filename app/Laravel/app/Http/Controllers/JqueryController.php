<?php

namespace App\Http\Controllers;

use App\Item;
use App\Task;
use App\Todo;
use Illuminate\Http\Request;

class JqueryController extends Controller
{
    //
    public function index()
    {
        //
        return view('jquery/index');
    }
    //追加 取得
    public function getItems()
    {
        $results = array();
        /*
        $tasks = Task::all();
        return $tasks;
        */
        $results["item"] = Item::all();
        $results["task"] = Task::all();
        $results["todo"] = Todo::all();
        return $results;
    }
}
