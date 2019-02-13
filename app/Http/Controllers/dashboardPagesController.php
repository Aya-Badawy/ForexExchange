<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPagesController extends Controller
{


  public function guide(){
    return view('dashboared');
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
