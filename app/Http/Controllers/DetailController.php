<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    //
    public function details($id) {
        $book = Book::where('id', $id)->get();
        $categories = Category::all();
        return View('details', ['book' => $book[0], 'categories' => $categories]);
    }
}
