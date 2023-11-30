<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropileController extends Controller
{
    public function index(){
        $nama = "Mutiya Permatasari";
        $alamat =  "Kabupaten Bandung";
        $tanggal_lahir = "12 October 2023";

        $data_array = array ();
            //"nama" => array (
              //  "Mat", "Mit", "Mut"
           // ),
        
        return view('propile', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
}
}
