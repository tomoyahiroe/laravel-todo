@extends('layouts.default')

<style>

</style>

@section('title', 'Laravel Todo App')

@section('content')
<div class="todo-app_wrapper">
  <form action="/create" method="POST">
    <table>
      @csrf
      <tr>
        <th>todo</th>
        <td><input type="text" name="todo" required></td>
      </tr>
      <tr>
        <th>description</th>
        <td><input type="text" name="description"></td>
      </tr>
      <tr>
        <th>due</th>
        <td><input type="date" name="due"></td>
      </tr>
    </table>
    <input type="submit" />
  </form>


  <div class="todo-list__container">
    <h3>Todo List</h3>
    @if(isSet($allTodo))
    <hr />
    <table class="todo-table">
      @foreach($allTodo as $todo)
      <tr class="todo-table__row">
        <td class="todo-name">{{$todo->todo}}</td>
        <td>: {{$todo->description}}</td>
        <td>due: {{$todo->due}}</td>
        <td><a href="/edit?id={{$todo->id}}">edit</a></td>
        <td><a href="/delete?id={{$todo->id}}">done!</a></td>
      </tr>
      @endforeach
    </table>
    <hr />
    @endif
  </div>
</div>
@endsection