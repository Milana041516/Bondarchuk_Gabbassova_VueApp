<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activity;


class ActivityController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
         $activities = Activity::join('cities', 'city_id', '=', 'cities.id')->select('cities.id','activities.name','activities.description','activities.price')->get();
         return response()->json($activities);
     }

     public function getOne($id) {
        $activity = Activity::join('cities', 'city_id', '=', 'cities.id')->select('cities.id','activities.name','activities.description','activities.price')->where('cities.id', '=', $id)->get();
        return response()->json($activity);
    }
    
}
