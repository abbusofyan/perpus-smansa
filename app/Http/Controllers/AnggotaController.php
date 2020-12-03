<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      return view('admin.anggota.index');
    }

    public function generateQrCode() {
      return view('test_qrcode');
    }
}
