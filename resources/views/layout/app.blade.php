<h1>@yield('title')</h1>

@yield('content')

<br/>
Level: {{ Session::get('level') }}
@if(Session::get('level') == 'admin')
    <br/>
    <a href="#">Data Siswa</a>
@endif
@if(Session::get('level') == 'admin')
    <br/>
    <a href="#">Data Petugas</a>
@endif
@if(Session::get('level') == 'admin')
    <br/>
    <a href="#">Data Kelas</a>
@endif
@if(Session::get('level') == 'admin')
    <br/>
    <a href="#">Data SPP</a>
@endif
@if(Session::get('level') == 'admin')
    <br/>
    <a href="#">Data SPP</a>
@endif
@if(Session::get('level') == 'admin' || Session::get('level') == 'petugas')
    <br/>
    <a href="#">Transaksi Pembayaran</a>
@endif
@if(Session::get('level') == 'admin' || Session::get('level') == 'petugas' || Session::get('level') == 'siswa')
    <br/>
    <a href="#">History Pembayaran</a>
@endif
<br/>
<a href="{{ route('auth.logout') }}">Logout</a>
<br/>
Copyright 2023
