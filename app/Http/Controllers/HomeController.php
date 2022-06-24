<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

    public function category_store(Request $request){
        $data = $request->validate([
            'category_name'=>'required'
        ]);
        $application = Application::create($data);
        return view('homepage.create_type',compact('application'));
    }

    public function type_store(Request $request,Application $application){
        $data = $request->validate([
            'type' => 'required'
        ]);
        $application -> update($data);
        if ($data['type'] === 'parent') {
            return redirect()->route('create.parent',$application->id);
        }

        if ($data['type'] === 'teacher') {
            return redirect()->route('create.teacher',$application->id);
        }

    }

    public function instruction(){
        return view('homepage.instructions');
    }

    public function about_us(){
        return view('homepage.about_us');
    }
}
