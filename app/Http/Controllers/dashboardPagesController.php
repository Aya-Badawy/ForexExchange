<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPagesController extends Controller
{


  public function guide(Request $request){
    return view('dashboared',['user'=>$request->user()]);
  }
   public function apiKey(Request $request){
     return view('apiKey',['user'=>$request->user()]);
   }

   public function currencyEncoding(Request $request){
     return view('currencyEncoding',['user'=>$request->user()]);
   }

   public function currencyExchange(Request $request){
     return view('currencyExchange',['user'=>$request->user()]);
   }

   public function followExchange(Request $request){
     return view('followExchange',['user'=>$request->user()]);
   }






}
