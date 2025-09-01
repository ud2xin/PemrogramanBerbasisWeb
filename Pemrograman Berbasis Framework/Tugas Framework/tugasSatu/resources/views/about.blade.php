@extends('layouts.app')
@section('title','Tentang')

@section('content')
<div class="card">
    <h2>Tentang</h2>
    <p>Aplikasi kecil untuk mendemonstrasikan konsep routing di Laravel.</p>
    <p><a href="{{ route('home') }}">← Kembali</a></p>
</div>
@endsection

