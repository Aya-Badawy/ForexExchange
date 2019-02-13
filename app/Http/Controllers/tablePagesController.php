<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablePagesController extends Controller
{
     public function pageOne(Request $request){
       return view('tablePage1',['user'=>$request->user()]);
     }

     public function pageTwo(Request $request){
       return view('tablePage2',['user'=>$request->user()]);
     }
     public function pageThree(Request $request){
       return view('tablePage3',['user'=>$request->user()]);
     }
     public function pageFour(Request $request){
       return view('tablePage4',['user'=>$request->user()]);
     }
     public function pageFive(Request $request){
       return view('tablePage5',['user'=>$request->user()]);
     }
}
