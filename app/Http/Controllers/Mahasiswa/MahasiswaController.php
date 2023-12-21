<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Models\datamahasiswa;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = [
            'NIM' => '200170153',
            'Nama' => 'Rajaul Bani Safar',
            'Jurusan' => 'Teknik Informatika',
            'Program Studi' => 'Teknik Informatika',
            'Mata Kuliah' => 'Pemrograman Lanjut',
        ];

        $mataKuliah = [
            'IoT',
            'Pemograman Lanjut',
            'Mobile Programming',
            'Teori Bahasa Dan Automata',
            'Riset Teknologi Informasi',
        ];

        return view('mahasiswa.index', compact('dataMahasiswa', 'mataKuliah'));
    }
}
