<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $allTodo = Todo::all();
        // dd($allTodo);
        return view('index', ['allTodo' => $allTodo]);
    }

    public function create(Request $request)
    {
    }
}