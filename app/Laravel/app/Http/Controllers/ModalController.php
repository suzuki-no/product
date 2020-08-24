<?php

namespace App\Http\Controllers;

use App\Item;
use App\Task;
use App\Todo;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    //
    public function index()
    {
        //
        return view('modal/index');
    }
    public function getItems()
    {
        $results = array();
        $results["item"] = Item::all();
        return $results;
    }
    public function getTasks()
    {
        $results = array();
        $results["task"] = Task::all();
        return $results;
    }
    public function getTodos()
    {
        $results = array();
        $results["todo"] = Todo::all();
        return $results;
    }
}
