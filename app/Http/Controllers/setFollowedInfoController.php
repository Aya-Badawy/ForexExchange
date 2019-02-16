<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\followExcahngeQueries;
class setFollowedInfoController extends Controller

{

    public static $inputs;

    public static function setFollowInfo(Request $request){
       $validation=self::data_validation($request);
       if ($validation->fails()) {
           $errors = $validation->errors();
            return  view('showMessage',['err'=>$errors]);
        }
        self::insetRow(self::$inputs);
        return view('followExchange',['message'=>'set Successfully','user'=>$request->user()]);
    }

    // update data in DB .
    public static function insetRow($data){
      $row=followExcahngeQueries::getFollowedCurrencyInfo();
      if(isset($row)){
      DB::table('followed_currency')
            ->where('user_id', $row->user_id)
            ->update([
              'currency_code'=>$data['currency_code'],
              'notify_number'=>$data['notify_number'],
              'hr_trigger'=>$data['hr_trigger']
            ]);
          }else{
            DB::table('followed_currency')->insert([
              'user_id'=>Auth::id(),
              'currency_code'=>$data['currency_code'],
              'notify_number'=>$data['notify_number'],
              'hr_trigger'=>$data['hr_trigger']
           ]);
          }
    }

    // validate input data .
    public  static function  data_validation(Request $request){
      self::$inputs=[
       'currency_code'=>$request->input('currency_code'),
       'notify_number'=>$request->input('notify_number'),
       'hr_trigger'=>$request->input('hr_trigger')
     ];
     $rules=[
       'currency_code'=>"required",
     'notify_number'=>[
       "required",
       "Numeric"
     ],
     'hr_trigger'=>[
       "required",
       "Numeric"
     ]
   ];
   $validation = \Validator::make( self::$inputs, $rules);

     return $validation;
   }



}
