@extends('layouts.default')


@section('title', 'Laravel Todo App')

@section('content')
<div class="todo-app_wrapper">
  @if(isSet($input))
  <h3>Edit Todo</h3>
  <form class="todo-form" action="/update" method="POST">
    <table class="todo-form__table">
      @csrf
      <input type="hidden" name="id" value="{{$input->id}}" />
      <tr>
        <th>Todo</th>
        <td><input type="text" name="todo" value="{{$input->todo}}" required></td>
      </tr>
      <tr>
        <th>Description</th>
        <td><textarea name="description" cols="50" rows="5">{{$input->description}}</textarea></td>
      </tr>
      <tr>
        <th>Due</th>
        <td><input type="date" name="due" value="{{$input->due}}"></td>
      </tr>
    </table>
    <input type="submit" value="Submit" />
  </form>

  @else
  <h3>Create Todo</h3>
  <form class="todo-form" action="/create" method="POST">
    <table class="todo-form__table">
      @csrf
      <tr>
        <th>Todo</th>
        <td><input type="text" name="todo" required></td>
      </tr>
      <tr>
        <th>Description</th>
        <td><textarea name="description" cols="50" rows="5"></textarea></td>
      </tr>
      <tr>
        <th>Due</th>
        <td><input type="date" name="due"></td>
      </tr>
    </table>
    <input type="submit" value="Submit" />
  </form>

  @endif


  <div class="todo-list__container">
    <h3>Todo List</h3>
    @if(isSet($allTodo))
    <table class="todo-table">
      @foreach($allTodo as $todo)
      <tr class="todo-table__row">
        <td class="todo-name">{{$todo->todo}}</td>
        <td class="todo-description">: {{$todo->description}}</td>
        <td>Due: {{$todo->due}}</td>
        <td>
          <a class="todo-edit__button" href="/update?id={{$todo->id}}">
            {!! file_get_contents(public_path('icons/edit_icon.svg')) !!}
          </a>
        </td>
        <td>
          <form action="/delete?id={{$todo->id}}" method="post" id="{{$todo->id}}">
            @csrf
            <button class="todo-delete__button">{!! file_get_contents(public_path('icons/done_icon.svg')) !!}</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    @endif
  </div>
</div>

<style>
  .todo-form {
    background-color: #c0c0c0;
    margin-bottom: 48px;
    padding: 32px;
    max-width: 1024px;
    box-sizing: border-box;
    color: #1d2630;
  }

  input,
  textarea {
    background-color: #f3f3f3;
  }

  .todo-form__table {
    border-spacing: 8px;
  }

  .todo-form th {
    text-align: left;
  }

  .todo-table {
    width: 100%;
    max-width: 1024px;
    border-spacing: 48px;
    background-color: #c0c0c0;
    color: #1d2630;
  }

  .todo-name {
    font-weight: bold;
  }

  .todo-edit__button svg {
    width: 32px;
    height: 32px;
    fill: #1d2630;
    transition: 1s;
  }

  .todo-delete__button {
    border: none;
    border-radius: 50%;
    width: fit-content;
    padding: 0;
    background-color: #c0c0c0;
  }

  .todo-delete__button svg {
    width: 32px;
    height: 32px;
    fill: #1d2630;
    transition: 1s;
  }

  .todo-edit__button svg:hover {}

  .todo-delete__button:hover {}
</style>

@endsection