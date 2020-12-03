<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

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
      return view('admin.peminjaman.create', compact('books'));
    }
}
