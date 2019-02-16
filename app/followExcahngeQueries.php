<?php
namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\makeAPiQuery;
use \App\Jobs\sendEmail;

class followExcahngeQueries{

     // get uer by id;
     public static function  getUserInfo(){
       return  DB::table('users')->first();
     }


     //get currency_code.
     public static function getFollowedCurrencyInfo(){
     return    DB::table('followed_currency')->first();
     }

     public static function insertRate($excahnge_rate,$currency_code){
     //insert the result of Api  query request in to DB.
     DB::table('currancy_rate__excahnge')->insert([
       'rate'=>$excahnge_rate['quotes']['USD'. $currency_code],
       'server_timeStamp'=>$excahnge_rate['timestamp']
          ]);
        }


        public static function getChangeInRates(){
          $user=self::getUserInfo();
          $currancy=self::getFollowedCurrencyInfo();
          $exchange_rate=makeAPiQuery::exchangeRateQuery($user->apikey,$currancy->currency_code);
        //  dd($exchange_rate);
          self::insertRate($exchange_rate,$currancy->currency_code);
          if($exchange_rate['quotes']['USD'. $currancy->currency_code] == $currancy->notify_number){
            sendEmail::dispatchNow($user);
          }
          }
        }
