@extends('layout.auth')

@section('title', 'Login')

@section('content')
    <form method="post" action="{{ route('auth.login-process') }}">
        {{ csrf_field() }}
        <span>Username</span>
        <input type="text" name="username" placeholder="username">
        <span>Password</span>
        <input type="password" name="password" placeholder="password">
        <button>Login</button>
    </form>
    <small>Jika siswa, maka username: NISN dan password: NIS</small>
    <br/>
@endsection
