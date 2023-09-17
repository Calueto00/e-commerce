<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
    public function index()
    {
       $products = Produt::paginate(3);
        return view('site.home',compact('products'));
    }

    public function details($slug)
    {
        $produt = Produt::where('slug',$slug)->first();

        Gate::authorize('ver_produto',$produt);
        return view('site.details',compact('produt'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $produt = Produt::where('id_category',$id)->paginate(3);
        return view('site.category',compact('produt','category'));
    }
}
