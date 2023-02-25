<h1>@yield('title')</h1>

@yield('content')

<br/>
Level: {{ $level }}
<br/>
<a href="{{ route('auth.logout') }}">Logout</a>
<br/>
Copyright 2023
