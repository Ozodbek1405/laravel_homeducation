<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Information;

class CreateController extends Controller
{
    public function name(){
        return view('applications.create');
    }

    public function name_store(Request $request){
        $request->validate([
            'type' => 'required'
        ]);
        $name = new Information;
        $name->type = $request->input('type');
        $name->save();
        return redirect()->route('create.category');
    }

    public function category(){
        $categories = Categories::all();
        return view('applications.create_categories',compact('categories'));
    }

    public function category_store(Request $request,Information $information){
        $request->validate([
            'category_name' => 'required'
        ]);
        $cat = new Information;
        $cat->category_name = $request->input('category_name');
        $cat->save();
        return redirect()->route('create.types');
    }

    public function types(){

    }

    public function parent(){

    }

    public function parent_store(){

    }

    public function teacher(){

    }

    public function teacher_store(){

    }
}
