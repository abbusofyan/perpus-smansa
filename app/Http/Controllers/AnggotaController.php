<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class AnggotaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      $users = User::where('level', 2)->get();
      return view('admin.anggota.index', compact('users'));
    }

    public function generateQrCode() {
      return view('test_qrcode');
    }

    public function store(Request $request) {
      $user = new User;
      $user->name = $request->name;
      $user->level = 2;
      if ($request->role == 'siswa') {
        $user->nis = $request->nis;
        $user->nip = '';
        $user->username = $request->nis;
        $user->password = bcrypt($request->nis);
      } else {
        $user->nip = $request->nip;
        $user->nis = '';
        $user->username = $request->nip;
        $user->password = bcrypt($request->nip);
      }
      $user->qr_code = $request->qrcode;
      $user->save();
      return redirect()->back()->with(['success' => 'Data anggota berhasil ditambahkan']);
    }
}
