<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurant;

class RestaurantsController extends Controller
{
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurant.show')->with('restaurant', $restaurant);
    }
}
