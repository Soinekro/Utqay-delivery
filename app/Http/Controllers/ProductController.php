<?php

namespace App\Http\Controllers;

use App\Models\Alied;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products= Product::paginate(14);
        return view('products.index',compact('products'));
    }

    public function alied(Alied $alied){
        $products = Product::where('alied_id',$alied->id)
        ->paginate(4);
        return view('products.alied',compact('products','alied'));
    }
}
