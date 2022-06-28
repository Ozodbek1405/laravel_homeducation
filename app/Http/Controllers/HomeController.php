<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Instruction;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Session;

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
        $instructions = Instruction::all();
        return view('homepage.instructions',compact('instructions'));
    }

    public function about_us(){
        return view('homepage.about_us');
    }

    public function lang($lang){
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
