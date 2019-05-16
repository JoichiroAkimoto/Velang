<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurant;

class TopController extends Controller
{
    public function index()
  {
    $restaurants = Restaurant::orderBy('id', 'ASC')->paginate(20);
    return view('top.index')->with('restaurants', $restaurants);
  }
}
