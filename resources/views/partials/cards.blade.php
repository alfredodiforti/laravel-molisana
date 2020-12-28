<section class="container ">
    <h2>{{ $title }}</h2>
    <div class="slots">
        @foreach ( $cards as $slot )
         <div class="slot">
             <a href="{{ route('product', $slot['id'])}}"><img src="{{ $slot ['src']}}" alt="{{$slot['titolo']}}"></a>
             <h3>{{$slot['titolo']}}</h3>
         </div>            
        @endforeach
    </div>
</section>