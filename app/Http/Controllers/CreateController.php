<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationParentRequest;
use App\Http\Requests\ApplicationTeacherRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Application;

class CreateController extends Controller
{
    public function name(){
        return view('applications.create');
    }

    public function name_store(Request $request){
        $data = $request->validate([
            'type' => 'required'
        ]);
        $application = Application::create($data);
        return redirect()->route('create.category',$application->id);
    }

    public function category(Application $application){

        $categories = Categories::all();
        return view('applications.create_categories',compact('categories','application'));

    }

    public function category_store(Request $request, Application $application){
        $request->validate([
            'category_name' => 'required'
        ]);
        $checkbox = implode(",", $request->get('category_name'));
        $application->update(['category_name' => $checkbox]);
        if($application->type=='parent'){
            return redirect()->route('create.parent',$application->id);
        }
        elseif ($application->type=='teacher'){
            return redirect()->route('create.teacher',$application->id);
        }
    }

    public function parent(Application $application){

        return view('applications.parents',compact('application'));

    }

    public function parent_store(ApplicationParentRequest $request, Application $application){

        $data = $request->validated();
        $application->update($data);

        return redirect()->route("home.index");

    }

    public function teacher(Application $application){
        return view('applications.teachers',compact('application'));
    }

    public function teacher_store(ApplicationTeacherRequest $request,Application $application){
        $data = $request->validated();
        $application->update($data);

        return redirect()->route("home.index");
    }
}
