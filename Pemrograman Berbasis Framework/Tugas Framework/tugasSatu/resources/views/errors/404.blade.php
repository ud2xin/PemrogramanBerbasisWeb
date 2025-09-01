@extends('layouts.app')

@section('title','Halaman Tidak Ditemukan')

@section('content')
<div class="card">
    <h2>404 — Halaman tidak ditemukan</h2>
    <p>Route tidak ada. Ini contoh <code>Route::fallback()</code>.</p>
    <p><a href="{{ route('home') }}">← Kembali ke Home</a></p>
</div>
@endsection
