<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      return view('member.index');
    }

    public function history() {
      return view('member.history');
    }

    public function perpanjang() {
      return view('member.perpanjang');
    }

    public function kartu_anggota() {
      $user = User::find(auth()->user()->id);
      return view('member.kartu_anggota', compact('user'));
    }

}
