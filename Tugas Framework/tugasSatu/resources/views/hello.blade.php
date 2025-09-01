@extends('layouts.app')

@section('title','Hello')

@section('content')
<div class="card">
    <h2>Hello, {{ $name }} 👋</h2>
    <p>URL ini menggunakan parameter opsional <code>{name?}</code> dengan validasi <code>whereAlpha</code>.</p>
    <p><a href="{{ route('home') }}">← Kembali</a></p>
</div>
@endsection
