@extends('layout.struttura')

@section('content')

<div>
    @if ($id > 0 )
     <a href="{{ route('product', $id - 1) }}">prev</a>
     @endif
</div>
<div>
    @if ($id < $length )
     <a href="{{ route('product', $id + 1) }}">next</a>
     @endif
</div>

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