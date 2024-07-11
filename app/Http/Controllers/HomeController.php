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

        if (is_numeric($umur)) {
            if ($umur < 0) {
                $umur = '';
                $status = 'Belum Lahir';
            } else {
                if ($umur < 15) {
                    $status = 'Anak-anak';
                } elseif ($umur >= 15 && $umur < 30) {
                    $status = 'Pemuda';
                } elseif ($umur >= 30 && $umur < 50) {
                    $status = 'Dewasa';
                } elseif ($umur >= 50) {
                    $status = 'Orang Tua';
                }
            }
        } else {
            $umur = '';
            $status = 'Kategori Tidak Ditemukan';
        }


        return 'Nama saya adalah ' . $nama . ', dan saya berumur ' . $umur . 'Tahun, dan kategori usia saya adalah ' . $status ;
    }

    public function blade_template_1()
    {
        $var_1 = 'Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Architecto laborum est dicta cumque
        consequatur. Incidunt recusandae commodi ducimus voluptas
        velit nemo, sint saepe rerum tempore molestias deleniti
        nam, maiores libero beatae, doloribus fugiat! Esse nemo
        fugit incidunt nobis perferendis culpa natus, suscipit
        nihil laborum error quibusdam, in vero dolorem consequuntur.';

        $var_2 = 'Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Architecto laborum est dicta cumque
        consequatur. Incidunt recusandae commodi ducimus voluptas
        velit nemo, sint saepe rerum tempore molestias deleniti
        nam, maiores libero beatae, doloribus fugiat! Esse nemo
        fugit incidunt nobis perferendis culpa natus, suscipit
        nihil laborum error quibusdam, in vero dolorem consequuntur.';

        return view('contoh',[
            'var_1' => $var_1,
            'var_2' => $var_2
            
        ]);
    }

    public function blade_template_2()
    {
        return view('contoh',[

            'var_1' => 'Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Architecto laborum est dicta cumque
        consequatur. Incidunt recusandae commodi ducimus voluptas
        velit nemo, sint saepe rerum tempore molestias deleniti
        nam, maiores libero beatae, doloribus fugiat! Esse nemo
        fugit incidunt nobis perferendis culpa natus, suscipit
        nihil laborum error quibusdam, in vero dolorem consequuntur.',

            'var_2' => 'Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Architecto laborum est dicta cumque
        consequatur. Incidunt recusandae commodi ducimus voluptas
        velit nemo, sint saepe rerum tempore molestias deleniti
        nam, maiores libero beatae, doloribus fugiat! Esse nemo
        fugit incidunt nobis perferendis culpa natus, suscipit
        nihil laborum error quibusdam, in vero dolorem consequuntur.'
        ]);
    }
}
