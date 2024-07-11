<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function subview() {
        return view('subview.contoh');
    }

    public function dengan_id($id) {
        return 'nomor saya adalah ' . $id;
    }

    public function cek_umur($nama, $umur) {
        return 'Nama saya adalah ' . $nama . ', dan saya berumur ' . $umur . 'Tahun';
    }
}
