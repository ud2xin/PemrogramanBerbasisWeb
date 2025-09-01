@extends('layouts.app')

@section('title','Blog')

@section('content')
<div class="card">
    <h2>Blog</h2>
    <p>Daftar artikel (klik judul untuk ke detail dengan parameter <code>{slug}</code>).</p>
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('blog.show', $post['slug']) }}">
            {{ $post['title'] }}
            </a>
        </li>
        @endforeach
    </ul>
    <p><a href="{{ route('home') }}">← Kembali</a></p>
</div>
@endsection
