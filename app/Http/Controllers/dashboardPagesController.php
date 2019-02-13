<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPagesController extends Controller
{


  public function guide(Request $request){
    return view('dashboared',['usere'=>$request->user()]);
  }
   public function apiKey(){
     return view('apiKey');
   }

   public function currencyEncoding(){
     return view('currencyEncoding');
   }

   public function currencyExchange(){
     return view('currencyExchange');
   }

   public function followExchange(){
     return view('followExchange');
   }






}
