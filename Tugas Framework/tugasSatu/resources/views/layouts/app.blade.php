<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Routing Demo')</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f7f7f7; margin:0; }
        nav { background:#fff; padding:12px; border-bottom:1px solid #ddd; }
        nav a { margin-right:15px; text-decoration:none; color:#2563eb; }
        nav a:hover { text-decoration:underline; }
        .container { max-width:800px; margin:20px auto; background:#fff; padding:20px; border-radius:8px; }
        footer { margin-top:20px; font-size:14px; color:#666; }
        code { background:#eee; padding:2px 6px; border-radius:4px; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">Tentang</a>
        <a href="{{ route('blog.index') }}">Blog</a>
        <a href="{{ route('hello', ['name' => 'Haikal']) }}">Hello</a>
        <a href="{{ route('admin.dashboard') }}">Admin</a>
    </nav>

    <div class="container">
        @yield('content')
        <footer>
        Route sekarang: <code>{{ Route::currentRouteName() }}</code>
        </footer>
    </div>
</body>
</html>
