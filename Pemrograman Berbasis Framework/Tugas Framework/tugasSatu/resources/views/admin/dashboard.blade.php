@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')
<div class="card">
    <p class="mt-4">
        Role Anda adalah <span class="font-bold">{{ Auth::user()->role }}</span>
    </p>

    <h2>Admin Dashboard</h2>
    <p>Contoh route group prefix <code>/admin</code> & name prefix <code>admin.*</code>.</p>
    <p><a href="{{ route('admin.posts.show', 1) }}">Kelola Post #1</a></p>
    <p><a href="{{ route('home') }}">← Kembali</a></p>
</div>
@endsection
