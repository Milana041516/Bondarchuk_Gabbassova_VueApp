<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;


class CountryController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
         $countries = Country::all();
         return response()->json($countries);
     }


     public function getOne($id) {
        $country = Country::select('countries.id','value','name')->where('countries.id', '=', $id)->get();
         return response()->json($country);
     }


     public function save(Request $request) {
        $this->validate($request, [
            'value' => 'required',
            'name' => 'required',
        ]);
        $country = Country::create($request->all());
        return response()->json($country, 201);
    }
}
