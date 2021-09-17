<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MathController extends Controller
{
    

    public function list(Request $request){

      $token = "dXQLdrFjX2qOGlCzedsJ8ITdZpacHYri";
      $value1 = $request->input("q");
      $value2 = $request->input("language");

      if(is_null($request->input("q"))){
        $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=Manila&language=en-us&details=false")->json();
        return view("welcome", ['data'=>$data]);
      }

      $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=$value1&language=$value2&details=false")->json();
      $key = $data[0]["Key"];
      $weather = Http::get("http://dataservice.accuweather.com/forecasts/v1/daily/1day/$key?apikey=$token")->json();
      return view("welcome", ['weather'=>$weather]);
    }
}
