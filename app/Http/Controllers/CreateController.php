<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationParentRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Information;

class CreateController extends Controller
{
    public function name(){
        return view('applications.create');
    }

    public function name_store(Request $request){
        $data = $request->validate([
            'type' => 'required'
        ]);
        $application = Information::create($data);
        return redirect()->route('create.category',$application->id);
    }

    public function category(){

        $categories = Categories::all();
        return view('applications.create_categories',compact('categories'));

    }

    public function category_store(Request $request,Information $application){
        $request->validate([
            'category_name' => 'required'
        ]);
        $checkbox = implode(",", $request->get('category_name'));
        Information::create(['category_name' => $checkbox]);

        return redirect()->route("create.parent",$application->id);
    }

    public function types(Information $application){

        return redirect()->route("create.parent",$application->id);

    }

    public function parent(){

        return view('applications.parents');

    }

    public function parent_store(ApplicationParentRequest $request){

        $data = $request->validated();
        $application = Information::create($data);


    }

    public function teacher(){

    }

    public function teacher_store(){

    }
}
