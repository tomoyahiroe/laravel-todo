<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
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

    public function create(TodoRequest $request)
    {
        $todoData = $request->all();
        Todo::create($todoData);

        return redirect('/');
    }
}