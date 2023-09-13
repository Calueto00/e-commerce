@extends('site.layout')
@section('title','Detail')
@section('content')
    <div class="row container">
        <div class="col s12 m6">
               <img src=" {{$produt->image}}" class="responsive-img">
        </div>
        <div class="col s12 m6">
                <h1> {{$produt->name}}</h1>
                <p> {{$produt->description}}</p>
                <button class="btn orange btn-large">Comprar</button>
        </div>
    </div>
@endsection
