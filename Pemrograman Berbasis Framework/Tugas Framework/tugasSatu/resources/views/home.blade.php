@extends('layouts.app')

@section('title','Home')

@section('content')
    <h1>Halaman Home</h1>
    <p>Selamat datang di demo routing Laravel 🚀</p>

    <h3>Link cepat ke halaman lain:</h3>
    <ul>
        <li><a href="{{ route('about') }}">Ke halaman Tentang (about)</a></li>
        <li><a href="{{ route('blog.index') }}">Ke daftar Blog</a></li>
        <li><a href="{{ route('hello','Laravel') }}">Hello dengan parameter</a></li>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
    </ul>
@endsection
