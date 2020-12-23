@extends('layout.struttura')

@section('content')

<section class="container ">
    <h2>le lunghe</h2>
    <div class="slots">
        @foreach ( $lunghe as $slot )
         <div class="slot">
             <img src="{{ $slot ['src']}}" alt="{{$slot['titolo']}}">
             <h3>{{$slot['titolo']}}</h3>
         </div>            
        @endforeach
    </div>
</section>
<section class="container ">
    <h2>le corte</h2>
    <div class="slots">
        @foreach ( $corte as $slot )
         <div class="slot">
             <img src="{{ $slot ['src']}}" alt="{{$slot['titolo']}}">
             <h3>{{$slot['titolo']}}</h3>
         </div>            
        @endforeach
    </div>
</section>
<section class="container ">
    <h2>le cortissime</h2>
    <div class="slots">
        @foreach ( $cortissime as $slot )
         <div class="slot">
             <img src="{{ $slot ['src']}}" alt="{{$slot['titolo']}}">
             <h3>{{$slot['titolo']}}</h3>
         </div>            
        @endforeach
    </div>
</section>










{{-- <section class="container">
    <div class="slots">
        @foreach ( $slots as $slot )
         <div class="slot">
             <img src="{{ $slot['src']}}" alt="{{$slot['titolo']}}">
             <h3>{{$slot['titolo']}}</h3>

         </div>            
        @endforeach
    </div>
</section> --}}
    
@endsection

