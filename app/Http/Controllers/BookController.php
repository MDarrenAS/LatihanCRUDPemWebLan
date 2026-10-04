<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    public function index()
    {
        $books = [];

        return view('books.index', ['books' => $books]);
    }

    public function create(): View
    {
        return view('books.create');
    }
}
