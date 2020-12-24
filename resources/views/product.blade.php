@extends('layout.struttura')

@section('content')

<section>
     <div class="container">
         <div>
             <h1>{{ $product['titolo'] }}</h1>
             <img src="{{ $product['src-h'] }}" alt="{{$product['titolo']}}">
             <img src="{{ $product['src-p'] }}" alt="{{$product['titolo']}}">
             <p>{!!$product['descrizione']!!}</p>
         </div>
     </div>
</section>


@endsection