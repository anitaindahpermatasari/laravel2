<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return 'test berhasil';
    }

    public function urutan($ke)
    {
// menampilkan banyak nilai array
        $numbers = [
            ['ke' => $ke, 'nomor' => 10],
            ['ke' => $ke, 'nomor' => 20],
            ['ke' => $ke, 'nomor' => 30]
        ];

        return view('urutan', compact('numbers'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function coba($ke)
    {
        return view('coba', ['ke' => $ke]);
        // sesuaikan dengan view yang ingin ditampilkan
    }
}
