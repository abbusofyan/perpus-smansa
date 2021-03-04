<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;


class PeminjamanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      return view('admin.peminjaman.index');
    }

    public function create() {
      $books = Book::all();
      $users = User::where('level', 2)->get();
      return view('admin.peminjaman.create', compact('books', 'users'));
    }
}
