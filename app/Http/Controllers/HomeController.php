<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {

        $title ="Data Mahasiswa";
        $data['mahasiswa'] = array (
            'nim'=> '1915101044',
            'nama'=> 'Ketut Deni Julia Marlina'
        );    
        return view('admin.beranda',compact('title','data'));
    }

    public function dashboard()
    {
        $title = "KOPI SEPANG";

        return view ('admin.dashboard', compact('title'));
    }
}       