@extends('layouts.master')

@section('content')
    <h2>Daftar UTS</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <p>Pilih menu di atas untuk menuju halaman masing-masing.</p>

    <!-- tabel data uts -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Uts_id</th>
                <th>Nama Mata Kuliah</th>
                <th>Jumlah SKS</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($uts as $u)
                <tr>
                    <td>{{ $u->uts_id }}</td>
                    <td>{{ $u->nama_matkul }}</td>
                    <td>{{ $u->c_jumlah_sks }}</td>
                    <td>{{ $u->d_keterangan }}</td>
                </tr>
            @empty
                <tr><td colspan="4">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
