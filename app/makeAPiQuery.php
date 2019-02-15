<?php
namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class makeAPiQuery{

    public static function apiQuery($key){
      // set API Endpoint and access key (and any options of your choice)
  $endpoint = 'live';
  $access_key = $key;

  // Initialize CURL:
  $ch = curl_init('http://apilayer.net/api/'.$endpoint.'?access_key='.$access_key.'');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Store the data:
  $json = curl_exec($ch);
  curl_close($ch);

  // Decode JSON response:
  $exchangeRates = json_decode($json, true);
 if($exchangeRates['success']){
     return true;
   }else{
     return false;
   }

}

public static function insertKey($key){
  DB::table('users')
              ->where('id', Auth::id())
              ->update(['apikey' => $key]);
}



}
