<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RahasiaController extends Controller
{
    public function tampilRahasia(){
        return ' anda sedang melihan <strong>Halaman Rahasia</strong>';
    }

    public function showme(){
        return redirect()->route('rahasia');
    }
}
