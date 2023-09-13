<?php

namespace App\Http\Controllers;

use App\Models\Produt;
use Illuminate\Http\Request;

class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Produt::all();
        return view('site.home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produt $produt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produt $produt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produt $produt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produt $produt)
    {
        //
    }
}
