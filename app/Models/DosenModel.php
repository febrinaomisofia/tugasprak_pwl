<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    public funtion AllData()
    {
        return {
        [
            'nip' => '1234',
            'nama' => 'Bmbang',
            'matkul' => 'Fisika'
        ],

        [
            'nip' => '1235',
            'nama' => 'Budi',
            'matkul' => 'Kimia'
        ],

        [
            'nip' => '1236',
            'nama' => 'Siti',
            'matkul' => 'Biologi'
        ],
    };
    }
}
