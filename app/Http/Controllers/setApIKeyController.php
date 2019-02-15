<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\makeAPiQuery;

class setApIKeyController extends Controller
{
  public function assigen(Request $request){
     $key = $request->input('key_value');
      $state=makeAPiQuery::apiQuery($key);
      // dd($state);
      if($state){
      makeAPiQuery::insertKey($key);
      return view('apiKey',['user'=>$request->user(),'message'=>'key set successfully']);
    }else{
      return view('apiKey',['user'=>$request->user(),'message'=>'incorrect APIkey']);

    }
  }


}
