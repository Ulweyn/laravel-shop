<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::where('id',5)->first();
        /*foreach ($products as $product){
            echo 'title: '.$product->title;
            echo "<br>";
            echo 'price: '.$product->price;
            echo "<br>";
            echo "------------------------";
            echo "<br>";

        }*/
        dd($products);
        //return view('home.index');
    }
}
