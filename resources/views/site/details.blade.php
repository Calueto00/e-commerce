@extends('site.layout')
@section('title','Detail')
@section('content')
    <div class="row container"> <br>
        <div class="col s12 m6">
               <img src=" {{$produt->image}}" class="responsive-img">
        </div>
        <div class="col s12 m6">
                <h4> {{$produt->name}}</h4>
                <h4>R$ {{number_format($produt->price,2,',','.') }}</h4>
                <p> {{$produt->description}}</p>
                <p>Postado por {{$produt->user->firstName}} <br>
                    Category: {{$produt->category->name}}
                </p>
                <button class="btn orange btn-large">Comprar</button>
        </div>
    </div>
@endsection
