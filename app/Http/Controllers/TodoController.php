<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return "Good !!";
        // $todos = Todo::all();
        // return view('index', ['todos' => $todos]);
    }

    public function create(TodoRequest $request)
    {
        $todo= $request->all();
        unset($todoData['_token']);
        Todo::create($todo);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $formInput = $request->all();
        unset($formInput['_token']);
        Todo::find($request->id)->update($formInput);
        return redirect(('/'));
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
