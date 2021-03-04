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
      $users = User::with('member')->where('level', 2)->get();
      return view('admin.anggota.index', compact('users'));
      // dd($users);
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

      $member = new Member;
      $member->user_id = $user->id;
      $member->major = $request->major;
      $member->class = $request->class;
      $member->save();

      return redirect()->back()->with(['success' => 'Data anggota berhasil ditambahkan']);
    }

    public function detail($id) {
      $user = User::where('id', $id)->first();
      return view('admin.anggota.detail', compact('user'));
      // dd($user);
    }

}
