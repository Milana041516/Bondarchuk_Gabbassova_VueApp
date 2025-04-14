<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;


class CityController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
         $cities = City::join('countries', 'country_id', '=', 'countries.id')->select('countries.id','cities.value','cities.name','cities.temperature', 'cities.icon', 'cities.weather')->get();
         return response()->json($cities);
     }

     public function getOne($id) {
        $city = City::join('countries', 'country_id', '=', 'countries.id')->select('countries.id','cities.value','cities.name','cities.temperature', 'cities.icon', 'cities.weather')->where('countries.id', '=', $id)->get();
        return response()->json($city);
    }
    
}
