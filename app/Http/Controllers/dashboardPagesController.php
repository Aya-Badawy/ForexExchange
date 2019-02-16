<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\followExcahngeQueries;
use Illuminate\Support\Facades\Auth;

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
     if($this->checkIfset()){
       return view('currencyExchange',['user'=>$request->user()]);
     }
      return view('notActivateApi');

   }

   public function followExchange(Request $request){

     if($this->checkIfset()){
       return view('followExchange',['user'=>$request->user()]);

     }
     return view('notActivateApi');
   }

   public function checkIfset(){
      $user=followExcahngeQueries::getUserInfo();
      //dd($user->apikey);
      if($user->apikey){
        return true;
      }
      return false;
   }






}
