<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //

    public function fictions($id) {
        $books = Book::where('category_id', $id)->get();
        $categories = Category::all();
        return View('fictions', ['books' => $books, 'categories' => $categories]);
    }

    public function science($id) {
        $books = Book::where('category_id', $id)->get();
        $categories = Category::all();
        return View('science', ['books' => $books, 'categories' => $categories]);
    }

    public function computers($id) {
        $books = Book::where('category_id', $id)->get();
        $categories = Category::all();
        return View('computers', ['books' => $books, 'categories' => $categories]);
    }
}
