@extends('layouts.app')

@section('title', $post['title'])

@section('content')
<div class="card">
    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['body'] }}</p>

    <p>
        <strong>Slug:</strong> <code>{{ $post['slug'] }}</code><br>
        <strong>Named route ini:</strong> <code>blog.show</code>
    </p>

    <p><a href="{{ route('blog.index') }}">← Kembali ke Blog</a></p>
</div>
@endsection
