<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact() {
        $categories = Category::all();
        return View('contact', ['categories' => $categories]);
    }
}
