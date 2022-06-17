<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
   public function faq(){
       $faqs = Faq::all();
       return view('homepage.faq',compact('faqs'));
   }

   public function question(Request $request){
       $request->validate([
           'questions' => 'required',
       ]);
       $faqs = new Faq();
       $faqs->questions = $request->input('questions');
       $faqs->save();
       return redirect()->back()->with('message', 'Savolingiz yuborildi');
   }

}
