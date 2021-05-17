<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = [
            'nip1' => '1. NIP : 1234',
            'nama1' => '2. Nama: Bambang',
            'matkul1' => '3. Mata Kuliah : Fisika',
            'spasi' => ' ',
            'nip2' => '1. NIP : 1235',
            'nama2' => '2. Nama: Budi',
            'matkul2' => '3. Mata Kuliah : Kimia',
            'spasi' => ' ',
            'nip3' => '1. NIP : 1236',
            'nama3' => '2. Nama: Siti',
            'matkul3' => '3. Mata Kuliah : Biologi',
            'spasi' => ' ',
        ];
        return view('v_dosen', $data);
    }
}
