@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Halaman UTS</h2>
        <p>Selamat datang di halaman UTS Laravel. Pilih menu di atas untuk navigasi.</p>

        <div class="card mt-4">
            <div class="card-header">
                <h5>Menu UTS</h5>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="/uts/pemrograman-web" class="list-group-item list-group-item-action">
                        Menu UTS Pemrograman Web
                    </a>
                    <a href="/uts/database" class="list-group-item list-group-item-action">
                        Menu UTS Database
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
