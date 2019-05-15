<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurant;

class TopController extends Controller
{
    public function index()
  {
    $restaurants = Restaurant::orderBy('id', 'ASC')->take(20)->get();
    return view('top.index')->with('restaurants', $restaurants);
  }
}
