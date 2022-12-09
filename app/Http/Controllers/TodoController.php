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
        unset($todoData['_token']);
        Todo::create($todoData);
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $formInput = Todo::find($request->id);
        $allTodo = Todo::all();
        $param = [
            'input' => $formInput,
            'allTodo' => $allTodo,
        ];
        return view('index', $param);
    }

    public function update(TodoRequest $request)
    {
        // $formInput = $request->all();
        // unset($formInput['_token']);
        // Todo::where('id', $request->id)->update($formInput);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        // var_dump($request->id);
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
