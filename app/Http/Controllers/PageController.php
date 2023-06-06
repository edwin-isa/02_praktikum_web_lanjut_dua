<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang!";
    }

    public function about()
    {
        echo "Nama : Mohamad Edwin Isa Alfais<br>";
        echo "NIM  : 2141720193";
    }

    public function article($id)
    {
        echo "Halaman Artikel dengan ID $id";
    }
}
