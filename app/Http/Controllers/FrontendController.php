<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // HALAMAN BERANDA
    public function home()
    {
        $menus = Menu::orderBy('jenis')->get()->groupBy('jenis');
        return view('home', compact('menus'));
    }

    // HALAMAN MENU
    public function menu()
    {
        $menus = Menu::orderBy('jenis')->get();
        return view('menu', compact('menus'));
    }

    // HALAMAN KONTAK
    public function kontak()
    {
        return view('kontak');
    }
}
