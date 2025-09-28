@extends ('utama')

@section('judul_menu')
    Ini ditampilkan dari section judul menu, dengan data : {{ $isi_data }}
    @if ($isi_data>20)
        <p>Isi data lebih dari 20</p>
    @elseif ($isi_data>15)
        <p>Isi data lebih dair 15</p>
    @else
        <p>Isi data kurang dari 15</p>
    @endif

@endsection

@section('isi_menu')
    Ini isi dari section isi menu
@endsection
