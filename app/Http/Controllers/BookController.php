<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function books() {
        $books = Book::all();
        $categories = Category::all();
        return View('books', ['books' => $books, 'categories' => $categories]);
    }
}
