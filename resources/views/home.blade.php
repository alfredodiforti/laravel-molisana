@extends('layout.struttura')

@section('content')

<div class="backhome">
    @include('partials.cards', ['cards' => $lunghe, 'title' => ' LE LUNGHE']);
    @include('partials.cards', ['cards' => $corte, 'title' => ' LE CORTE']);
    @include('partials.cards', ['cards' => $cortissime, 'title' => ' LE CORTISSIME']);
</div>


    
@endsection

