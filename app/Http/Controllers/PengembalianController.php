<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PengembalianController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index() {
    return view('admin.pengembalian.index');
  }

  public function create() {
    $books = Book::all();
    return view('admin.pengembalian.create', compact('books'));
  }

}
