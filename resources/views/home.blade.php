@extends('layout.app')

@section('content')
<div class="card">
    <h2>Selamat Datang di Lusmana Catering</h2>
    <p>
        Lusmana Catering menyediakan layanan catering berkualitas
        untuk berbagai acara seperti pernikahan, ulang tahun,
        dan acara resmi lainnya.
    </p>
</div>

<div class="card">
    <h3>Jenis Menu Catering</h3>
    @foreach ($menus as $jenis => $listMenu)
        <p>• {{ $jenis }}</p>
    @endforeach
</div>

@foreach ($menus as $jenis => $listMenu)
<div class="card">
    <h3>{{ $jenis }}</h3>

    @foreach ($listMenu as $menu)
        <div class="menu-item">
            {{ $menu->nama_menu }}
            <span class="price">
                Rp {{ number_format($menu->harga, 0, ',', '.') }}
            </span>
        </div>
    @endforeach
</div>
@endforeach
@endsection
