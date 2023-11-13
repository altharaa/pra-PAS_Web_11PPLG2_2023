<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($book)
    {
        $book = Book::find($book);

        if (!$book) {
            // Handle the case where the book is not found
            abort(404); // You can customize this based on your error handling strategy
        }

        return view('books.detail', compact('book'));
    }

}
