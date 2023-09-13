@extends('site.layout')

@section('content')
    <h1>herança de {{$name}} com idade {{$idade}} </h1>
    @include('includes.message',['title' => 'mensagem de include'])

    @component('components.sidebar')
        @slot('paragraph')
                Texte do paragrafo
        @endslot
    @endcomponent
@endsection

@push('style')

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
