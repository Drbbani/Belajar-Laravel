<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = ['Budi', 'Siti', 'Andi'];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}