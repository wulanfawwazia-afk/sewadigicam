<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Budi',
        //     'pekerjaan' => 'Developer',
        // ];
        // return view('home')->with($data);
        $nama = "Teddy";
        $pekerjaan = "programmer";
        $alamat = "Batam";
        $hobi = "Fotografi";
        return view('home', compact('nama', 'pekerjaan', 'alamat', 'hobi'));
    }

    public function contact()
    {
        return view('contact');
    }
}