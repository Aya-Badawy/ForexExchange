<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class chartingController extends Controller
{
    public static function charts(){
      $rates = DB::table('currancy_rate__excahnge')->get();
       return view('charting',['rates'=>$rates]);
    }
}
