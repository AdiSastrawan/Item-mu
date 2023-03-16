<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::with("products")->get();
        return view('page.homepage', compact("categories"));
    }
}
