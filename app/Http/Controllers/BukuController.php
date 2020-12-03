<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BukuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      return view('admin.buku.index');
    }

    public function create() {
      $books = Book::all();
      return view('admin.buku.create', compact('books'));
    }
}
