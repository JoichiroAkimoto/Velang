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

    public function search(Request $request)
    {
        // 検索フォームのキーワードをあいまい検索して、productsテーブルから20件の作品情報を取得する
        $restaurant = Restaurant::where('store_name', 'LIKE', "%{$request->keyword}%")->take(20)->get();
        return view('restaurant.search')->with('restaurants', $restaurant);
    }
}
