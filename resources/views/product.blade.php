@extends('layout.struttura')

@section('content')

<div class="cursor">
    <div>
        @if ($id > 0 )
         <a class="prev" href="{{ route('product', $id - 1) }}"><i class="fas fa-caret-square-left"></i></a>
         @endif
    </div>
    <div>
        @if ($id < $length )
         <a class="next" href="{{ route('product', $id + 1) }}"><i class="fas fa-caret-square-right"></i></a>
         @endif
    </div>
</div>


<section>
     <div class="container product">
         <div>
             <h1>{{ $product['titolo'] }}</h1>
             <img src="{{ $product['src-h'] }}" alt="{{$product['titolo']}}">
             <img src="{{ $product['src-p'] }}" alt="{{$product['titolo']}}">
             <p>{!!$product['descrizione']!!}</p>
         </div>
     </div>
</section>


@endsection