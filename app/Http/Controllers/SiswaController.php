<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $halaman='siswa';
        $siswa = ['Fauzi fadhillah','Fauzi','Gnateng'];
        return view('siswa.index',compact('halaman','siswa'));
    }
}
