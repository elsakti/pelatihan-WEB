<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects.index',[
            'background_color' => 'blue',
            'title' => 'Project Saya'
        ]);
    }

    public function create()
    {
        return view('pages.projects.create',[
            'background_color' => 'blue',
            'title' => 'Tambahkan Data'
        ]);
    }





    public function home()
    {
        return view('pages.home', [
            'background_color' => 'red',
            'title' => 'Halaman Utama'
        ]);
    }

    public function about()
    {
        $nama = 'Rakha Bagus';
        return view('pages.about',[
            'nama_about' => $nama,
            'background_color' => 'green',
            'title'=>'Tentang Saya'
        ]);
    }





}
