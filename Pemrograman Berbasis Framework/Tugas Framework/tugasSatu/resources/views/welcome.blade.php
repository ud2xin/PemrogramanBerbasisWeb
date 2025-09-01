<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Routing Demo')</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,'Helvetica Neue',Arial,sans-serif;margin:0;padding:0;background:#f7f7fb;color:#222}
        nav{display:flex;gap:12px;flex-wrap:wrap;align-items:center;background:#fff;padding:14px 18px;border-bottom:1px solid #eee;position:sticky;top:0}
        a{text-decoration:none;color:#2563eb}
        a:hover{text-decoration:underline}
        .container{max-width:960px;margin:28px auto;padding:0 16px}
        .card{background:#fff;border:1px solid #eee;border-radius:14px;padding:18px;box-shadow:0 1px 6px rgba(0,0,0,.04)}
        footer{margin:24px 0;color:#666;font-size:14px}
        code{background:#f3f4f6;padding:2px 6px;border-radius:6px}
        ul{padding-left:18px}
    </style>
</head>
<body>
    <nav>
        <strong>Laravel Routing Demo</strong>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">Tentang</a>
        <a href="{{ route('blog.index') }}">Blog</a>
        <a href="{{ route('hello', ['name' => 'Haikal']) }}">Hello (param)</a>
        <a href="{{ route('admin.dashboard') }}">Admin</a>
    </nav>

    <div class="container">
        @yield('content')
        <footer>
        Route saat ini: <code>{{ Route::currentRouteName() }}</code>
        </footer>
    </div>
</body>
</html>
