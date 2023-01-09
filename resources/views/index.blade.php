@extends('layouts.default')


@section('title', 'Simple Todo App')

@section('content')
<section class="auth-card">
  <h2> Please Login or Register</h2>
  <div class="button-container">
    <a href="{{ route('login') }}" class="login-button button">
    Login</a>
    <a href="{{ route('register') }}" class="register-button button">
    Register</a>
  </div>
</section>
<section class="app-description">
  <h2>Usage</h2>
  <p>Please create account and login. You can access your own page for managing your tasks after Login. </p>
  <h2>Language & Framework</h2>
  <ul>
    <li>PHP / Laravel8</li>
  </ul>
  
</section>
@endsection