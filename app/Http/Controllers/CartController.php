<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function carList(Request $request){
       $items = \Cart::getContent();
        dd($items);
    }
}
