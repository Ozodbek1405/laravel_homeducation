<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomeController extends Controller
{
    public function index(){
        $categories = Categories::all();
        return view('homepage.home',compact('categories'));
    }

    public function category(){
        $categories = Categories::all();
        return view('categories.categories',compact('categories'));
    }

    public function instruction(){
        return view('homepage.instructions');
    }

    public function about_us(){
        return view('homepage.about_us');
    }
}
