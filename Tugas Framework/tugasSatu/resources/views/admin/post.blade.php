@extends('layouts.app')

@section('title','Admin - Post '.$id)

@section('content')
<div class="card">
    <h2>Admin: Kelola Post #{{ $id }}</h2>
    <p>Parameter numerik divalidasi dengan <code>whereNumber('id')</code>.</p>
    <p><a href="{{ route('admin.dashboard') }}">← Kembali ke Dashboard</a></p>
</div>
@endsection
