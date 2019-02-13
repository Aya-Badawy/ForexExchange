<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablePagesController extends Controller
{
     public function pageOne(){
       return view('tablePage1');
     }

     public function pageTwo(){
       return view('tablePage2');
     }
     public function pageThree(){
       return view('tablePage3');
     }
     public function pageFour(){
       return view('tablePage4');
     }
     public function pageFive(){
       return view('tablePage5');
     }
}
