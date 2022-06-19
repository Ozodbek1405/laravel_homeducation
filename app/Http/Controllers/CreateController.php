<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name_store;

class CreateController extends Controller
{
    public function name(){
        return view('applications.create');
    }
    public function name_store(Request $request){
        $request->validate([
            'radio' => 'required'
        ]);
        $name = new Name_store;
        $name->type = $request->input('radio');
        $name->save();
        return view('applications.create_categories');
    }
}
