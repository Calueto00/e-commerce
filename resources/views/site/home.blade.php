@extends('site.layout')

@section('content')


    <div class="row container">
        @foreach ($products as $product)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="{{$product->image}}">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons"><span class="material-icons">
                        visibility
                        </span></i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{Str::limit($product->name,20)}}</span>
                    <p>{{Str::limit($product->description,25)}}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection


