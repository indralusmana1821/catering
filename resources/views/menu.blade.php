@extends('layout.app')

@section('content')
<div class="card">
    <h2>Daftar Menu Catering</h2>

    @foreach ($menus as $menu)
        <div class="menu-item">
            <strong>{{ $menu->nama_menu }}</strong>
            <span class="price">
                Rp {{ number_format($menu->harga, 0, ',', '.') }}
            </span>
            <br>
            <small style="color:#aaa">
                Jenis Menu: {{ $menu->jenis }}
            </small>
        </div>
    @endforeach
</div>
@endsection
