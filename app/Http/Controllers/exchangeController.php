<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\makeAPiQuery;
use \App\followExcahngeQueries;
class exchangeController extends Controller
{
  public function Exchange(Request $request){
    $key=$this->getKey();
    $currencies=$this->getCurrencies($request);
    $exchangeRates=makeAPiQuery::exchangeRateQuery($key,$currencies);
    if($exchangeRates['success']){
      return view('showExchangeChart',['qoutes'=>$exchangeRates['quotes']]);



    }
    return view('currencyExchange',['err'=>'the Enter currenices code Not correct,Try agin',
                            'user'=> $request->user()]);
  }

  public function getCurrencies(Request $request){
      return $request->input('currencies');
  }

  public function getKey(){
    $user=followExcahngeQueries::getUserInfo();
    return $user->apikey;
  }

}
