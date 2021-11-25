<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home() {
        $categories = Category::all();
        return View('welcome', ['categories' => $categories]);
    }
}
