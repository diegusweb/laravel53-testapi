@extends('layouts.app');

@section('main-content')

    <div class="container white">
      <h1>Nuevo Tipo de Lugar</h1>
    @include('placetype.form',['placetype' => $placeType, 'url' => '/place_type', 'method' => 'POST'])
    </div>
@endsection
