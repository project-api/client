<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Get all products
      $prd_url = "http://web-api.dev/api/products";
      $products_json = file_get_contents($prd_url);
      $products_array = json_decode($products_json, true);

      // Get all catergories
      $cat_url = "http://web-api.dev/api/categories";
      $cat_json = file_get_contents($cat_url);
      $cat_array = json_decode($cat_json);
      //exit($products_json);
      return view('home', ['product_result' => $products_array, 'categories' => $cat_array]);
    }
}
